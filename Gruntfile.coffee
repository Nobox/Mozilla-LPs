module.exports = (grunt) ->

    ###
     Main Grunt configuration object
    ###
    grunt.initConfig
        pkg: grunt.file.readJSON 'package.json'

        # Commonly used file paths
        paths:
            public: 'content'
            images: '<%= paths.public %>/img'
            scripts: '<%= paths.public %>/scripts'
            styles: '<%= paths.public %>/styles'
            stylus_source: '<%= paths.styles %>/src'

        # Name keys used for different important files and folders
        dist_key: 'dist'
        main_key: 'main'

        # Generated 'banner' text on top of compiled distribution files
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> -
            <%= grunt.template.today("yyyy-mm-dd") %>\n
            <%= pkg.homepage ? "* " + pkg.homepage + "\n" : "" %>
            * Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;
             Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n'

        # Compiling stylus files
        stylus:
            options:
                'include css': true
                compress: false
                use: [require('stylus-type-utils')]
                import: ['nib']
            dev:
                files:
                    '<%= paths.styles %>/<%= main_key %>.css': '<%= paths.stylus_source %>/<%= main_key %>.styl'
            dist:
                options:
                    compress: true
                files:
                    '<%= dist_key %>/<%= paths.styles %>/<%= main_key %>.min.css': '<%= paths.stylus_source %>/<%= main_key %>.styl'

        # Compile on-demand with `grunt watch`
        watch:
            stylus:
                files: ['<%= paths.stylus_source %>/**/*.styl']
                tasks: ['stylus:dev']

        ###
         Deployment tasks
        ###

        # Copy folders as-is to production build
        copy:
            dist:
                files: [
                    # Laravel app folder
                    expand: true
                    src: ['lang/**']
                    dest: '<%= dist_key %>/'
                  ,
                    # Copy content with empty folders, then copy bower components (after --production build)
                    src: ['content/*']
                    dest: '<%= dist_key %>/'
                ]

        # Clean as much junk as we can for production build
        clean:
            dist:
                expand: true
                cwd: '<%= dist_key %>/'
                src: [
                    '.gitkeep'
                    '.gitignore'
                    'bower_components'
                ]

        # Image optimization
        imagemin:
            dist:
                files: [
                    expand: true
                    cwd: '<%= paths.images %>/'
                    src: ['**/*.{png,jpg,jpeg,gif}']
                    dest: 'dist/<%= paths.images %>/'
                ]

        # RequireJS Optimizer
        requirejs:
            dist:
                options:
                    name: 'main'
                    baseUrl: '<%= paths.scripts %>'
                    out: '<%= dist_key %>/<%= paths.scripts %>/main.min.js'

                    stubModules: ['cs']
                    include: ['requirejs']
                    exclude: ['coffee-script']

                    paths:
                        requirejs: '../bower_components/requirejs/require'
                        cs: '../bower_components/require-cs/cs'
                        'coffee-script': '../bower_components/coffee-script/index'
                        jquery: 'empty:'
                        facebook: 'empty:'
                        twitter: 'empty:'
                        gplusone: 'empty:'

    ###
     Register tasks
    ###

    grunt.registerTask 'init', [
        'stylus:dev'
    ]

    grunt.registerTask 'optimize-assets', [
        'stylus:dist'
        'requirejs'
        'imagemin'
    ]

    grunt.registerTask 'build', [
        'mkdir:dist'
        'copy:dist'
        'optimize-assets'
    ]

    # Helper tasks
    grunt.registerTask 'stylus', ['stylus:dev']

    grunt.registerTask 'mkdir:dist', ->
        grunt.file.mkdir('dist')

    grunt.registerTask 'mkdir:assets', ->
        grunt.file.mkdir('dist/content')

    ###
     Load Grunt plugins to use
    ###
    grunt.loadNpmTasks 'grunt-contrib-requirejs'
    grunt.loadNpmTasks 'grunt-contrib-jshint'
    grunt.loadNpmTasks 'grunt-contrib-stylus'
    grunt.loadNpmTasks 'grunt-contrib-watch'
    grunt.loadNpmTasks 'grunt-contrib-clean'
    grunt.loadNpmTasks 'grunt-contrib-copy'
    grunt.loadNpmTasks 'grunt-contrib-imagemin'
    grunt.loadNpmTasks 'grunt-bower-requirejs'
    grunt.loadNpmTasks 'grunt-ftp-deploy'
    grunt.loadNpmTasks 'grunt-shell'
