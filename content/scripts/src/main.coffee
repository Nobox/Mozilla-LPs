###
 Class Mozilla
###
class Mozilla

    init: ->
        # Add classes depending on user's browser
        body = $('body')

        if not bowser.firefox
            body.addClass('not-firefox')
        else if bowser.firefox and parseInt(bowser.version) < 25
            body.addClass('old-firefox')
        else
            body.addClass('is-firefox')

        @events()

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

            $this.attr('aria-selected', true)
            $this.closest('.tab').addClass('is-active')

            $panels.hide()
            panel = $this.attr('href')
            $(panel).show().focus()

            # Track click event
            ga('send', 'event', 'tab', 'click', $this.closest('.tab').find('h2').text())

        # Track clicks on footer social buttons with events
        $('#social-pages').on 'click', 'a', (e) ->
            ga('send', 'event', 'social button', 'click', $(this).text())


$(document).ready ->
    site = new Mozilla
    site.init()
