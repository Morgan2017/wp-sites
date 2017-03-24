function jsSelect() {
    jQuery('.jsSelect').each(function(){
        var $this = jQuery(this),
            value_sel = $this.find('.jsSelect__value'),
            val = value_sel.val(),
            dataVal = value_sel.attr('data-value');
        if( (val == '')  ){
            val = $this.find('li:first a').html();
            dataVal = $this.find('li:first a').attr('data-value');
            value_sel.html(val).attr('data-value', dataVal);
        }
    });

    jQuery(document).on('click', '.jsSelect__open', function (e){
        var parent = jQuery(this).parent();
        if( parent.hasClass('open')){
            parent.removeClass('open');
        } else {
            jQuery('.jsSelect').removeClass('open');
            parent.addClass('open');
        }
    });

    jQuery(document).on('click', '.jsSelect li a', function (e){
        var $this = jQuery(this),
            parent = $this.parents('.jsSelect'),
            val = $this.html(),
            dataVal = $this.attr('data-value');

        parent.find('.jsSelect__value').html(val).attr('data-value', dataVal);
        parent.removeClass('open');
    });


    jQuery(document).bind("click touchend", function (e) {
        var cont = jQuery('.jsSelect');
        if ( (!cont.is(e.target)) && (cont.has(e.target).length === 0) ){
            jQuery('.jsSelect').removeClass('open');
        }
    });
};
jQuery(document).ready(function() {
  jQuery.fn.exists = function(){return this.length>0;};
  var container = jQuery('.container').outerWidth();



  // header nav
  jQuery(document).on('click', '.open_nav', function (e){
    var nav = jQuery(this).parent();

    nav.toggleClass('open');
    if(nav.hasClass('open')){
      nav.children('ul').slideDown(300);
    } else{
      nav.children('ul').slideUp(300);
    }
  });

  // form selects (home and rental pages)
  if (jQuery('.jsSelect').exists()){
    jsSelect();
  }

  if (jQuery('.tabs').exists()) {
    tabsLoad();
  }

  if (jQuery('.fancybox').exists()){
    jQuery(".fancybox").fancybox({
      openEffect  : 'none',
      closeEffect : 'none',

      prevEffect : 'none',
      nextEffect : 'none'
    });
  }





  jQuery(document).on('click', '.openFilter', function (e){
    var $this = jQuery(this);
    $this.hide(0);
    $this.siblings('.searchForm').slideDown(300);
  });


  jQuery(document).bind("click touchend", function (e) {
    var cont = jQuery('.singIn').parent();
    if ( (!cont.is(e.target)) && (cont.has(e.target).length === 0) ){
      jQuery('.selectSing').removeClass('opened');
    }
  });
  jQuery(document).on('click', '.singIn', function (e){
    e.preventDefault();
    jQuery(this).siblings('.selectSing').toggleClass('opened');
  });








  var markerNav = 0;
  jQuery(window).resize(function(){
    container = jQuery('.container').outerWidth();

    if ( (container>949) && (markerNav !=1) ) {
      // nav
      jQuery('.nav ul').show(0);
      jQuery('.nav').removeClass('open');

      markerNav = 1;
    } else if ( (container<950) && (markerNav !=2) ){
      // nav
      jQuery('.nav ul').hide(0);

      markerNav = 2;
    }
  });



  if (jQuery('.nav').exists()) {
    jQuery('.nav li a').bind("click", function (e) {
      var anchor = jQuery(this),
          linkHref = anchor.attr('href');


      if( linkHref.indexOf('#') === 0 ){
        var name = anchor.attr('href').replace(new RegExp("#", 'gi'), ''),
            theOffset = $('section[name=' + name + ']').offset();
        e.preventDefault();
        jQuery('html, body').stop().animate({
          scrollTop: theOffset.top
        }, 1000);
        return false;
      }
    });
  };


});

// map (page: product)
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: mapSettings.zoom,
    scrollwheel: false,
    scaleControl: false,
    draggable: false,
    center: mapSettings.centerCoord
  });

  var marker = new google.maps.Marker({
    position:mapSettings.marker.coord,
    map: map,
    title: mapSettings.marker.title,
    icon: mapSettings.marker.icon
  });
};





jQuery(document).on('click', '.openPopup', function (e){
    e.preventDefault();

    if ( jQuery(e.target).attr('data-popup') ){
        succesForm(e);
    } else {
        openPopup(e);
    }

});

jQuery(document).on('click', '.popup__close, .closePopup', function (e){
    jQuery(this).parents('.popup').fadeOut(300);
    jQuery('html').removeClass('blur');
});
/*
var popupContainer = jQuery('.popup__container');
jQuery(document).on('mouseup touchend ',function (e){
    if (!(popupContainer.is(e.target)) && popupContainer.has(e.target).length === 0 && !(popupContainer.find('input').is( ":focus" ))){
        jQuery('.popup').fadeOut(300);
        jQuery('html').removeClass('blur');
    }
});

*/

function succesForm (e){
    var name = jQuery(e.target).attr('data-popup');// for button type submit

    jQuery('html').addClass('blur');
    jQuery('#' + name).fadeIn(300);
    var timer = setTimeout(function(){
        jQuery('#' + name).fadeOut(300);
        jQuery('html').removeClass('blur');
    },3000);
};



function openPopup (e){
    var name = jQuery(e.target).attr('href');

    jQuery('html').addClass('blur');
    jQuery(name).fadeIn(300);
};
function tabsLoad(){
	jQuery('.tabs').each(function(){
				
		var $this = jQuery(this);

		var $content = $this.find('ul.tabs__content>li'),
		$buttons = $this.find('ul.tabs__link>li');
		var lastActive = 0;

		setTabActive(lastActive);
		function setTabActive(index){

			$buttons.removeClass('active');
			$buttons.eq(index).addClass('active');
			
			$content.removeClass('visible');
			$content.eq(index).addClass('visible');

		}
					
		$buttons.click(function(){
			var current = jQuery(this).index();
			setTabActive(current);
		});	
		
	});
};