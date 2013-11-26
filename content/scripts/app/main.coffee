###
 Main application module
###
define (require) ->
    $ = require('jquery')
    bowser = require('bowser')

    ###
     Class App

     App logic goes here, but keep it short and sweet.
     Write most code on separate modules and require them here.
     This will allow us to write reusable code.
    ###
    class App

        constructor: ->
            console.log('Main class was built without side effects')

        init: ->
            $(document).ready =>
                @events()

                # Add classes depending on user's browser
                console.log(bowser)

        events: ->
            $tablist = $('#tabs')
            $tabs = $tablist.find('.tab')
            $panels = $('#main').find('.panel')

            $tabs.on 'click', 'a[role="tab"]', (e) ->
                e.preventDefault()
                $this = $(this)

                $tablist.addClass('is-active')

                $tabs.removeClass('is-active')
                $tabs.find('a').attr('aria-selected', false)

                $this.attr('arial-selected', true)
                $this.closest('.tab').addClass('is-active')

                $panels.hide()
                panel = $this.attr('href')
                $(panel).show().focus()
