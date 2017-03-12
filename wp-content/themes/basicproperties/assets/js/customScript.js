jQuery(document).ready(function() {
 
 jQuery("#owl-example").owlCarousel({
		navigation : false, 
      slideSpeed : 3000,
      paginationSpeed : 400,
      singleItem: true,
	pagination: false,
    	rewindSpeed: 5000,
	transitionStyle : "fade",
	responsive: true,
	autoPlay : true,
	});
	
jQuery("#menu").hover(function(){
    jQuery('.flyout').removeClass('hidden');
},function(){
    jQuery('.flyout').addClass('hidden');
}); 


jQuery('.suburb-developments').hide();
	jQuery('#north').click(function(){
		jQuery('.suburb-developments').hide();
		jQuery('#northern-developments').slideDown(300);
		
	});
	jQuery('#south').click(function(){
		jQuery('.suburb-developments').hide();
		jQuery('#southern-developments').slideDown(300);
		
	});
	jQuery('#east').click(function(){
		jQuery('.suburb-developments').hide();
		jQuery('#eastern-developments').slideDown(300);
		
	});
	jQuery('#west').click(function(){
		jQuery('.suburb-developments').hide();
		jQuery('#western-developments').slideDown(300);
		
	});

	


	resizeCont();
});

jQuery(window).load(function() {
  resizeCont();  
});
jQuery(window).resize(function() {
    resizeCont(); 
});
function resizeCont(){
	var wrapWidth=jQuery('.mainWrap').outerWidth();
	var winWidth=jQuery(window).width();
	var calWidth=(winWidth-wrapWidth)/2;
	jQuery('.site-header').css('left',calWidth);
	
	var fooHt=jQuery('.site-footer').height();
	var winHt=jQuery('html').height()-fooHt;
	//jQuery('.site-header').height(winHt);
	jQuery('.site-main .site-main').height(winHt);
	
	/*if(jQuery(window).width()>767){
		jQuery('.buttonDiv').hide();
		jQuery('.menu-primary-container').show();
		
	}else{
		jQuery('.menu-toggle').hide();
		//jQuery('.menu-primary-container').hide();
		jQuery('.main-navigation .buttonDiv').on('click',function(){
			//jQuery(this).addClass('menuActive')
			jQuery(this).next('.menu-primary-container').slideToggle();
		});
		
		
		
	}*/
}

