<script type="text/javascript">
$(window).load(function() {
	$("#h-txt1").delay(2500).fadeIn("slow");
	$("#h-txt2").delay(4000).fadeIn("slow");
});

$("#ism1").mouseenter(function(){
  $("ul#sm1").animate({
  width: 'toggle',
  opacity: "toggle"
  },500);
});

$("ul#sm1").mouseenter(function(){
  $("#ism1").addClass("selected");
});

$("ul#sm1").mouseleave(function(){
  $(this).delay(100).animate({
  opacity: "toggle"
  },300);
  $("#ism1").removeClass("selected");
});

$("#menu-item").click(function () {
	$("#menu").slideToggle("slow");
});

$("#menu").click(function () {
	$("#menu").slideToggle("slow");
});
</script>

<script type="text/javascript" src="scripts/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
(function($){
$(window).load(function(){
  $(".content-scroll").mCustomScrollbar({
	  mouseWheel:true,
	  theme:"light-2",
	  advanced:{
		  updateOnContentResize: true
	  }
  });
});
})(jQuery);
</script>

<script type="text/javascript">
$(window).load(function(){
  $('#loadingPage').delay(700).fadeOut(1500);
});
</script>