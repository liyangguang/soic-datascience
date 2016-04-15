(function(){
  $(document).ready(function() {

    // navigation related links
    $("body").on("click", "a[data-link], button[data-link]", function(event) {
      openPage($(this).attr('data-link'), $(this).html(), $(this).attr('data-nav'));
    });

    // expand online curriculum and residential curriculum
    $('.js-content').on('click', '.expand-button', function(event) {
      $(this).next('ul').removeClass('hide');
      $(this).remove();
    });

    // expand faq
    $('.js-content').on('click', '.js-content-expand', function(event) {
      $(this).next('p').toggleClass('hide');
    });

    // load the first page
    $(".navitem:eq(0)>a").click();

    // Disable caching of AJAX responses
    $.ajaxSetup ({ cache: false });

    // talks page: expand description
    $('.js-showmore').on('click', function(event) {
      $(this).parents(".talk-description").removeClass("hideContent").addClass("showContent");
      $(this).remove();
    });

  });

  function openPage(linkName, title, superNav){
    var crumb = linkName == 'program' ? '' : '<a data-link="program">Data Science</a> > ';
    crumb += !!superNav ? ('<a data-link="degrees">' + superNav + '</a> > ') : '';
    crumb += title;
    $('.js-crumb').html(crumb);

    $(".navlist li").removeClass('active');
    $(".navlist a[data-link="+linkName+"]").parent("li").addClass('active');

    loadPageContent(linkName);
  }

  function loadPageContent(linkName){
    $( ".js-content" ).load( "pages/"+linkName+".html" );
  }
  
})();