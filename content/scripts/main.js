/*
 Class Mozilla
*/


(function() {
  var Mozilla;

  Mozilla = (function() {
    function Mozilla() {}

    Mozilla.prototype.init = function() {
      var body;
      body = $('body');
      if (!bowser.firefox) {
        body.addClass('not-firefox');
      } else if (bowser.firefox && parseInt(bowser.version) < 25) {
        body.addClass('old-firefox');
      } else {
        body.addClass('is-firefox');
      }
      return this.events();
    };

    Mozilla.prototype.events = function() {
      var $downloads, $panels, $tablist, $tabs;
      $tablist = $('#tabs');
      $tabs = $tablist.find('.tab');
      $panels = $('#main').find('.panel');
      $tabs.on('click', 'a[role="tab"]', function(e) {
        var $this, panel;
        e.preventDefault();
        $this = $(this);
        $tablist.addClass('is-active');
        $tabs.removeClass('is-active');
        $tabs.find('a').attr('aria-selected', false);
        $this.attr('aria-selected', true);
        $this.closest('.tab').addClass('is-active');
        $panels.hide();
        panel = $this.attr('href');
        $(panel).show().focus();
        return ga('send', 'event', 'Tab', 'click', $this.closest('.tab').find('h2').text());
      });
      $downloads = $('#downloads');
      $downloads.find('.download-link.for-not-firefox').on('click', function(e) {
        return ga('send', 'event', 'Download', 'click', 'Firefox download from non-user showing banner: ' + $(this).closest('#header').data('banner'));
      });
      $downloads.find('.download-link.for-old-firefox').on('click', function(e) {
        return ga('send', 'event', 'Download', 'click', 'Firefox download from upgrade user');
      });
      $downloads.find('.download-translator').on('click', '.button-orange', function(e) {
        return ga('send', 'event', 'Download', 'click', 'Translator download from up-to-date user');
      });
      $('.panel').on('click', '.button-green', function(e) {
        return ga('send', 'event', 'Content CTA', 'click', 'CTA in content tab: ' + $(this).closest('.panel').find('h2').text() + ' by user type: ' + $(this).data('type'));
      });
      return $('#social-pages').on('click', 'a', function(e) {
        return ga('send', 'event', 'social button', 'click', $(this).text());
      });
    };

    return Mozilla;

  })();

  $(document).ready(function() {
    var site;
    site = new Mozilla;
    return site.init();
  });

}).call(this);
