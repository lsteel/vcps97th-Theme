var jqueryScript = function() {
  (function( $ ) {

    $(function() {

      $('.grid').masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.grid-item',
        // use element for option
        columnWidth: '.grid-sizer',
        percentPosition: true,
      })

      var mobileScreen = false;

      setLinkActive();
      everySize();

      $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();
        if ($(this).attr('href') == '#') {
          event.preventDefault();
        }
        else {
          var target = this.hash;
          var newTarget = $(target);

          newTarget.velocity('scroll', { duration: 1500, offset: -30, easing: 'ease' });

          window.location.hash = target;
        }
      });

      function setLinkActive() {
        $(".site-header [href]").each(function() {
          if (this.href == window.location.href) {
            $(this).addClass("active");
          }
        });
        $('div > ul > li > a').each(function() {
          var self = $(this);
          if (self.parent().find('.active').length !== 0) {
            self.addClass('active');
          }
        });
      }

      function everySize() {
        if ($(window).width() > 1023) {
          $('.hero-right .background-container').addClass('wider');
        }
        else {
          $('.hero-right .background-container').removeClass('wider');
        }
        $('.vert-center').each(function() {
          $(this).css({
            'top' : '50%',
            'margin-top' : '-' + ($(this).height() / 2) + 'px'
          });
        });
        $('.hor-center').each(function() {
          $(this).css({
            'left' : '50%',
            'margin-left' : '-' + ($(this).width() / 2) + 'px'
          });
        });
        $('.grid-item .thumbnail-wrapper img').each(function() {
          $(this).css({
            'top' : '50%',
            'margin-top' : '-' + ($(this).height() / 2) + 'px',
            'left' : '50%',
            'margin-left' : '-' + ($(this).width() / 2) + 'px'
          });
        });
        $('.off-center-left').each(function() {
          $(this).css({
            'left' : '20%',
            'margin-left' : '-' + ($(this).width() / 2) + 'px'
          });
        });
      }

      $(window).resize(function() {
        everySize();
      });

      function socialize() {
        var url = window.location.href,
        urlEncode = encodeURIComponent(url),
        urlDomainOnly = url.replace(/.*?:\/\//, "").replace(/\.com.*$/, ""),
        postTitle = $('.entry-title').text(),
        titleEncode = encodeURIComponent(postTitle),
        gplusLink = $('.google-link'),
        twLink = $('.twitter-link'),
        fbLink = $('.facebook-link'),
        liLink = $('.linkedin-link');

        liLink.attr("href", "http://www.linkedin.com/shareArticle?mini=true&url=" + urlEncode + "&title=" + titleEncode + "&source=" + urlDomainOnly);
        gplusLink.attr("href", "https://plus.google.com/share?url=" + url);
        twLink.attr("href", "http://twitter.com/share?text=" + titleEncode + "%20-%20@PNMsoft%20-%20&url=" + url);
        fbLink.attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + url);
      }


      everySize();

    });

  }(jQuery));
}

window.onload = jqueryScript;
