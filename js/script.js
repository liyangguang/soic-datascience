(function(){
  $(document).ready(function() {

    // talks page: expand description
    $('.js-toggle-button').on('click', function(event) {
      $(this).parents(".talk-description").toggleClass("hideContent").toggleClass("showContent");
      $(this).toggleClass("toggle-button-more").toggleClass("toggle-button-less");
    });

    // show video
    $('.js-button-video').on('click', function(){
      $('.js-video-wrap').removeClass('hide');
    });

    // close video
    $('.js-video-close').on('click', function(){
      $('.js-video-wrap').addClass('hide');
      document.getElementById('talk-video').pause();
    });

    // chromecast video
    document.addEventListener("DOMContentLoaded", function() {
      videojs("demo_player", {
        plugins: {
          chromecast: {
            enabled: true,
            appId: 34523314,
            metadata: {
              title: "Jure Leskovec",
              subtitle: "Subtitle"
            }
          }
        }
      });
    });

  });
})();