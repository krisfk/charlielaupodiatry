$(document).ready(function(){	
  $('.mobile-menu-btn').click(function(){
    $('.mobile-menu-btn').toggleClass("active"); 
    $('.menu-top-container ul').toggleClass("active"); 
  })
});
$(window).load(function() {
   wow = new WOW(
	      {
	      boxClass:     'wow',      // default
	      animateClass: 'animated', // default
	      offset:       0,          // default
	      mobile:       false,       // default
	      live:         true        // default
	    }
    )
    wow.init();
});