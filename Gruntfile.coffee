module.exports = (grunt) ->

    ###
     Main Grunt configuration object
    ###
    grunt.initConfig
        pkg: grunt.file.readJSON 'package.json'

        # Commonly used file paths
        paths:
            public: 'content'
            images: '<%= paths.public %>/images'
            scripts: '<%= paths.public %>/scripts'
            coffee: '<%= paths.scripts %>/src'
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
                    '<%= paths.styles %>/<%= main_key %>.css': '<%= paths.stylus_source %>/<%= main_key %>.styl'

        # Compile on-demand with `grunt watch`
        watch:
            stylus:
                files: ['<%= paths.stylus_source %>/**/*.styl']
                tasks: ['stylus:dev']

    ###
     Register tasks
    ###

    grunt.registerTask 'init', [
        'stylus:dev'
    ]

    grunt.registerTask 'build', [
        'stylus:dist'
    ]

    ###
     Load Grunt plugins to use
    ###
    grunt.loadNpmTasks 'grunt-contrib-stylus'
    grunt.loadNpmTasks 'grunt-contrib-coffee'
    grunt.loadNpmTasks 'grunt-contrib-watch'
