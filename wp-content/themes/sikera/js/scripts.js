(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';            
        var lastId, currentSectionId;
        var topMenu = $('.header-nav');
        var menuItems = topMenu.find('a');
        var scrollItems = menuItems.map(function(){
            var item = $($(this).attr('href'));
            if (item.length) { return item;}
        });
        menuItems.click(function(e){
            var scrollTime = 600;
            if($('body').hasClass('mobmenu-visible')){
               $('body').removeClass('mobmenu-visible'); 
               scrollTime = 0;
            }
            var targetId = $(this).attr('href');
            $("html, body").animate({ scrollTop: $(targetId).offset().top }, scrollTime);
            e.preventDefault();
        });
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 10) {
                $('body').removeClass("at-top");
            } else {
                $('body').addClass("at-top");
            }         
            var fromTop = $(this).scrollTop()+100;
            if (fromTop+$(window).height() >= $(document).height()) {
                var currentSection = scrollItems;
            } else {
                var currentSection = scrollItems.map(function(){
                    if ($(this).offset().top < fromTop)
                    return this;
                });
            }
            currentSection = currentSection[currentSection.length-1];
            currentSectionId = currentSection && currentSection.length ? currentSection[0].id : '';            
            if (lastId !== currentSectionId) {
                lastId = currentSectionId;
                menuItems
                    .parent().removeClass('active')
                    .end().filter('[href="#'+currentSectionId+'"]').parent().addClass('active');
                if (isMob) {
                    var activeLbl = menuItems.filter('[href="#'+currentSectionId+'"]').text();
                    $('.mobile-cursection-lbl').html(activeLbl);
                }     
            }                   
        });
        
        $('.mobile-nextsection-trigger').click(function(e){
            var cursectionIndex = $('#'+currentSectionId).index();
            cursectionIndex = (cursectionIndex < 0 ) ? 0 : cursectionIndex;
            var targetsection = $('.c-section').eq(cursectionIndex+1);
            if (targetsection.length > 0) {
                $("html, body").animate({ scrollTop: targetsection.offset().top }, 600);
            }
            e.preventDefault();
        });
        $('.mobile-menu-trigger').click(function(e){
            $('body').toggleClass('mobmenu-visible');
            e.preventDefault();
        });
	});
	
})(jQuery, this);
