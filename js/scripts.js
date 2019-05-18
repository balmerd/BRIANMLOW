
jQuery(document).ready(function($){
//open/close primary navigation
	$('#artform-global-nav-container-trigger').on('click', function(){
		$('.artform-menu-icon').toggleClass('is-clicked'); 
		$('body').toggleClass('menu-is-open');
		
		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('#artform-global-nav-container').hasClass('is-visible') ) {
			$('#artform-global-nav-container').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('#artform-global-nav-container').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
			});	
		}
	});
	
	$('#menu-global-nav li a').on('click', function(){
		$('.artform-menu-icon').toggleClass('is-clicked'); 
		$('body').toggleClass('menu-is-closed');
		
		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('#artform-global-nav-container').hasClass('is-visible') ) {
			$('#artform-global-nav-container').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('#artform-global-nav-container').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
			});	
		}
	});
	
	$('#artform-page-wrapper .artform-fadeout').on('click', function(){
		$('body').toggleClass('menu-is-closed');
	});
});


/* Header Change On Scroll */
//enquire.register("screen and (min-width : 1200px)", function() {
	jQuery(document).on('scroll',function(){
	if(jQuery(document).scrollTop()>250){ 
		jQuery('#artform-header').addClass('there');
		jQuery('#artform-header').removeClass('gone');
	}
	else{
		jQuery('#artform-header').addClass('gone');
        jQuery('#artform-header').removeClass('there');
	}
});
//}, true); // note the `true`!




if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style');
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  );
  document.querySelector('head').appendChild(msViewportStyle);
}