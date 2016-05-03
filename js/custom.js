$(document).ready(function(e) {
    $(".nav").click(function(){
		$(this).toggleClass("close");
		$("nav").toggleClass("show");
		});
});