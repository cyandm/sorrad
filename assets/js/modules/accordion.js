jQuery(document).ready(function($){

	$(".accordion-title").click(function() {
		
		$(".accordion-title").removeClass("active");
        $(this).addClass("active");
		
		$(".accordion-content").not($(this).next(".accordion-content")).slideUp();
		$(this).next(".accordion-content").slideToggle();
 
		$(".accordion-title .ico").not($icon).removeClass("icon-close").addClass("icon-plus");
	

		var $icon = $(this).find(".ico");
		if ($icon.hasClass("icon-plus")) {
			$icon.removeClass("icon-plus");
			$icon.addClass("icon-close");
		} else {
			$icon.removeClass("icon-close");
			$icon.addClass("icon-plus");
		}
	});
	
});
