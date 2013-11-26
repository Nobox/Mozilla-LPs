<<<<<<< HEAD
=======
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
      var $panels, $tablist, $tabs;
      $tablist = $('#tabs');
      $tabs = $tablist.find('.tab');
      $panels = $('#main').find('.panel');
      return $tabs.on('click', 'a[role="tab"]', function(e) {
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
        return $(panel).show().focus();
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
>>>>>>> Simplified Gruntfile
