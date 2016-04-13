(function(){
  $(document).ready(function() {

    // event listener for navigation related links
    $("body").on("click", "a[data-link]", function(event) {
      openPage($(this).attr('data-link'), $(this).html(), $(this).attr('data-nav'));
    });

    // event listener for expand course list
    $('.js-content').on('click', '.expand-button', function(event) {
      $(this).next('ul').removeClass('hide');
      $(this).remove();
    });

    // load the first page
    $(".navitem:eq(0)>a").click();

    // Disable caching of AJAX responses
    $.ajaxSetup ({ cache: false });

  });

  function openPage(linkName, title, superNav){
    var crumb = '<a data-link="program">Data Science</a> > ';
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