jQuery(document).ready(function($){

    $("#menu-slide-icon").click(function(event) {
        $("#sliding-menu").addClass('show');
    });
	
	$("#menu-slide-close").click(function() {
		$("#sliding-menu").removeClass('show');
	});
});