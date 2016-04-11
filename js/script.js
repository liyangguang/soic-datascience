(function(){
	$(document).ready(function() {

		$(".js-crumb, .js-content, .navlist").on("click", "a", function(event) {
			if ($(this).attr('data-link')) {
				openPage($(this).attr('data-link'), $(this).html(), $(this).attr('data-nav'));
			}
		});

		$(".navitem:eq(0)>a").click();

		$.ajaxSetup ({
		    // Disable caching of AJAX responses
		    cache: false
		});
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