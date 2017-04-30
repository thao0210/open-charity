jQuery(window).load(function() {
  jQuery('#slidebox').flexslider({
    animation: "fade",
    directionNav:true,
    controlNav:false
  });
  
  $('.mobile-menu').click(function(){
	$(this).find('i').toggleClass('active')
  });
});
