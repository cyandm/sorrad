jQuery(document).ready(function($){

	$(".tab").click(function() {
		var tabId = $(this).data("tab");
		
		$(".tab, .tab-content").removeClass("active");
		$(this).addClass("active");
		$("#" + tabId).addClass("active");
	});	
});
