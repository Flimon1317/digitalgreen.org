jQuery(document).ready(function(){
        jQuery('body').addClass('page-animate');
        jQuery(".search-button").click(function() {
            var top = jQuery(".search-input").css("top");
             if (top == '-152px'){
                jQuery(".search-input").animate({'top': '100%'}, 500);
            }else{
                 jQuery(".search-input").animate({'top': '-152px'}, 500);
            }
        });

        jQuery('.award-content .logo-details:first-child').addClass('hover-on');
        jQuery('#logo_slider li:first-child').addClass('active-arrow');
        jQuery('#logo_slider li').hover(function(){
            var thisPos = jQuery(this).position().left;
            var dataIndex = jQuery(this).data('index');
            jQuery('#logo_slider li, #logo_slider li:first-child').removeClass('active-arrow');
            jQuery(this).addClass('active-arrow');
            jQuery('.award-content .logo-details:first-child').removeClass('hover-on');
            jQuery('.award-content .logo-details').removeClass('hover-on');
            jQuery('.award-content .logo-details[data-index='+ dataIndex +']').addClass('hover-on').find('.triangle-up').css('left', thisPos + 70);
        });
    jQuery('.navbar-toggle').click(function(){
        if(jQuery('.navbar-collapse').is(':visible')){
            jQuery('.navbar-collapse').slideUp();
            jQuery(this).removeClass('close-menu');
        }else{
            jQuery('.navbar-collapse').slideDown();
            jQuery(this).addClass('close-menu');
        }
    });


    jQuery('.mega-dropdown').mouseenter(function() {
        jQuery(this).find('ul').css({'z-index':'300'}).stop().slideDown();
    });

    jQuery('.mega-dropdown').mouseleave(function() {
        jQuery(this).find('ul').css({'z-index':'0'}).stop().slideUp();
    });

/* All Slideshows */
 if(jQuery(window).width() <= 1024){
       jQuery('.globalimp-list').slick({
                slidesToShow: 1,
                dots: true
            });
    }
 if(jQuery(window).width() <= 991){
    jQuery('.stat-slider, .gray-box').slick({
        slidesToShow: 1,
        dots: true
    });
}
     if(jQuery(window).width() <= 767){

            var sliderBox = jQuery('.activity-details, .team-slider, .comment-slider,.partners-slider').slick({
                slidesToShow: 1,
                dots: true
            });
            jQuery('.footer-section-title').click(function(){
                jQuery('.footer-blocks').find('.footer-list').slideUp(400);
                jQuery('.footer-blocks').find('.down-arrow').show();
                jQuery('.footer-blocks').find('.up-arrow').hide();

                if(jQuery(this).parents('.footer-blocks').find('.footer-list').is(':visible')){
                    jQuery(this).parents('.footer-blocks').find('.footer-list').slideUp(500);
                    jQuery(this).find('.down-arrow').show();
                    jQuery(this).find('.up-arrow').hide();
                }else{
                    jQuery(this).parents('.footer-blocks').find('.footer-list').slideDown(500);
                    jQuery(this).find('.down-arrow').hide();
                    jQuery(this).find('.up-arrow').show();
                }
            });
            jQuery('#logo_slider').slick({
                slidesToShow: 1,
                dots: true,
                responsive: [
                    {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                      }
                    }
                ]
            });

            $('.gray-box-row .slick-prev, .gray-box-row .slick-next ').click(function(e){
                var i = $(this).index();
                jQuery('.current-opening-disc').fadeOut();
                sliderBox.slick('slickGoTo', i);
                return false;
            });

            
        }else{
            jQuery('#logo_slider').slick({
                slidesToShow: 6,
                dots: false,
                infinite: false,
                slidesToScroll: 1,
                speed: 1200

            });
        }

        jQuery('.banner-slideshow, .testimonials-section,.country-quote-slider').slick({
            dots: true,
            infinite: true,
            slidesToScroll: 1,
            arrows: true
        });
        jQuery('.common-slick-slideshow').slick({
            centerMode: true,
            centerPadding: '200px',
            slidesToShow: 1,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    centerPadding: '100px',
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    centerPadding: '40px',
                  }
                }
            ]
        });

        if(jQuery(window).width() >= 1024){

            jQuery('.our-approach-carousel').slick({
                slidesToShow: 3,
                infinite: false
            });
        }
        jQuery('#carousel-mobile-img').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            infinite: true,
            arrows: true,
            responsive: [
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '100px',
                    arrows: false,
                  }
                }
            ]

        });

        jQuery('.video-list').slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            infinite: true,
            arrows: true,
            dots: true,
            variableWidth: true
        });
        
        jQuery('.timeline-dates-slider').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            infinite: true,
            focusOnSelect: true,
            asNavFor: '.timeline-info-slider',
            arrows: true,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });

        jQuery('.timeline-info-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            asNavFor: '.timeline-dates-slider',
            arrows: false,
            dots: false,
            variableHeight: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        fade: true
                    }
                }
            ]
        });

    jQuery('.sub-menu-title a').click(function(){
        jQuery('.sub-menu-title li').removeClass('activemenu');
        jQuery(this).parent('.sub-menu-title li').addClass('activemenu');
        var thisHref = jQuery(this).attr('href');
        jQuery('html, body').animate({
        scrollTop: jQuery(thisHref).offset().top
      }, 800, 'linear');
    });

   jQuery(document).scroll(function(){
        var scrollPos = jQuery(document).scrollTop();
        jQuery('.sub-menu-title a').each(function () {
            var thisCurrLink = jQuery(this);
            var currLink = jQuery(this).attr("href");
             if ((scrollPos + jQuery(window).height()/2) > $(currLink).offset().top ) {
                jQuery('.sub-menu-title li').removeClass("activemenu");
                thisCurrLink.parents('.sub-menu-title li').addClass("activemenu");
            }
            else{
                thisCurrLink.parents('.sub-menu-title li').removeClass("activemenu");
            }
        });
   });
   

    jQuery('.award-content .logo-details:first-child').addClass('hover-on');
    jQuery('#logo_slider li:first-child').addClass('active-arrow');
    jQuery('.slider-with-tab').click(function(){
        var dataIndex = jQuery(this).data('index');
        jQuery('.slider-with-tab').removeClass('active-tab');
        jQuery(this).addClass('active-tab');
        jQuery('.approach-content .single-img-container').removeClass('visible-approch');
        jQuery('.approach-content .single-img-container[data-index='+ dataIndex +']').addClass('visible-approch');
    });

    jQuery('.partner-collepse-button').click(function(e){
        e.preventDefault();
        if(jQuery(this).siblings('.collapse-projects').is(':visible')){
            jQuery(this).siblings('.collapse-projects').slideUp();
        }else{
            jQuery(this).siblings('.collapse-projects').slideDown();
        }

        if(jQuery('.partner-collepse-button .icon-down-arrow').is(':visible')){
            jQuery('.partner-collepse-button .icon-down-arrow').hide();
            jQuery('.partner-collepse-button .icon-up-arrow').show();
        }else{
            jQuery('.partner-collepse-button .icon-up-arrow').hide();
            jQuery('.partner-collepse-button .icon-down-arrow').show();
        }
    });

    jQuery('.select-input').click(function(){

        
        if(jQuery(this).parent('.dropdown-wrapper').hasClass("active")) {
            jQuery(this).parent('.dropdown-wrapper').removeClass("active");
        } else {
            jQuery('.dropdown-wrapper').removeClass("active");
            jQuery(this).parent('.dropdown-wrapper').addClass("active");
        }
    });
    jQuery(document).click(function(e) { 
        if(!jQuery(e.target).closest('.dropdown-wrapper').length) {
            e.stopPropagation();
            if(jQuery('.dropdown').is(":visible")) {
                jQuery('.select-input').parent('.dropdown-wrapper').removeClass('active');
            }
        }        
    });
    jQuery('.dropdown-wrapper li a').click(function(e){
        e.preventDefault();
        var selectedText= jQuery(this).text();
        jQuery(this).parents('.dropdown-wrapper').find('.select-input input').attr('value' , selectedText);
        jQuery(this).parents('.dropdown-wrapper').removeClass('active');
    });

    // Out team page 
    jQuery('.main-tab-txt').click(function(){
        if(jQuery(this).hasClass('active-tab')){
            jQuery(this).removeClass('active-tab').next('.sub-tab-list').slideUp();;
        }else{
            jQuery('.sub-tab-list').slideUp();
            jQuery('.main-tab-txt').removeClass('active-tab');
             jQuery(this).addClass('active-tab').next('.sub-tab-list').slideDown();
        }
        if(jQuery(window).width() <=767){   
            if(jQuery(this).siblings('.team-list').is(':visible')){
                jQuery(this).siblings('.team-list').slideUp();
            }else{
                jQuery('.team-list').slideUp();
                jQuery(this).siblings('.team-list').slideDown();
            }
            
        }
      
    });
    jQuery('.sub-tab-list>li>.tab-acc').click(function(e){
        if(jQuery(this).hasClass('active-tab')){
            jQuery(this).removeClass('active-tab').next('.child-sub-list').slideUp();
        }else{
            jQuery('.child-sub-list').slideUp();
            jQuery('.sub-tab-list>li>.tab-acc').removeClass('active-tab');
            jQuery(this).addClass('active-tab').next('.child-sub-list').slideDown();
        }
        
    });
    jQuery('.sub-tab-list>li>a').click(function(e){
        e.preventDefault();
        var thisIndex = jQuery(this).data('index');
        jQuery('.sub-tab-list>li>a').removeClass('active-link');
        jQuery(this).addClass('active-link');
        jQuery('.filter-details .team-list').hide();
        jQuery('.filter-details[data-index='+ thisIndex +']').children('.team-list').slideDown();
    });

    jQuery('.gray-box-title').click(function(e){
        e.preventDefault();
        var thisCode = jQuery(this).data('code');
        if(jQuery(this).hasClass('active')){
            jQuery(this).removeClass('active');
            jQuery('.current-opening-disc').fadeOut();
        }else{
            jQuery('.gray-box-title').removeClass('active');
            jQuery(this).addClass('active');
            jQuery('.current-opening-disc').fadeOut();
            jQuery('.current-opening-disc[data-code='+ thisCode +']').fadeIn();
        }
        
        
        
        var firstPos = '-'+jQuery(this).position().left - 10;
        if(jQuery(window).width() > 767){
            jQuery('.current-opening-disc[data-code='+ thisCode +']').css('margin-left', firstPos+'px');
        }
        
    });

    jQuery('.tab-list li').click(function(){
        var thisDataIndex = jQuery(this).data('index');
        jQuery('.tab-list li').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.tab-options-list').fadeOut();
        jQuery('.current-opening-disc').hide();
        jQuery('.tab-options-list[data-id='+ thisDataIndex +']').fadeIn(500);

        jQuery('.partners-container').hide();
        jQuery('.partners-container[data-index='+ thisDataIndex +']').fadeIn(500);
    });

    jQuery('.tab-options-list li a').click(function(e){
        e.preventDefault();
        jQuery('.tab-options-list li a').removeClass('active');
        jQuery(this).addClass('active');
        var thisId = jQuery(this).data('id');
        jQuery('.country-partner .gray-box-tabbing').hide();
        jQuery('.country-partner .gray-box-tabbing[id='+ thisId +']').show();
    });

    jQuery('.scroll-top').click(function(){
         jQuery('html,body').animate({ scrollTop: 0 }, 800);
        return false; 
    })
    jQuery(window).scroll(function () {
        if(jQuery(window).width() > 767){
            setTimeout(function(){
            jQuery('.animate-section').each(function () {
            if (isScrolledIntoView(this) === true) {
              jQuery(this).addClass('in-view');
            }
            })
           },150);
        }
        if(jQuery(window).scrollTop() > jQuery(window).height()){
            jQuery('.scroll-top').fadeIn(500);
        }else{
            jQuery('.scroll-top').fadeOut(500);
        }
    });

    function isScrolledIntoView(elem) {
        var docViewTop = jQuery(window).scrollTop();
        var docViewBottom = docViewTop + jQuery(window).height();
        var elemTop = jQuery(elem).offset().top;
        var elemBottom = elemTop + jQuery(elem).outerHeight();

        if(jQuery(elem).outerHeight() > jQuery(window).height()){
            return (docViewTop >= elemTop - jQuery(elem).outerHeight()/4);
        }else{
            return (docViewTop >= elemTop - jQuery(elem).outerHeight());
        }
    }

    jQuery(window).scroll(function(){
        if(($(window).scrollTop() + $(window).innerHeight() + 150) >= jQuery('.dg-footer').offset().top){
            jQuery('.dg-footer').addClass('active-footer');
        }
    })
    if(jQuery(window).width() > 1024){
        var winScroll = jQuery(window).scrollTop();
        jQuery(window).scroll(function(){
            var currentScroll = jQuery(window).scrollTop();
            if(winScroll < currentScroll){
                winScroll = jQuery(window).scrollTop();
                $('.navbar-background').addClass('move-top').removeClass('set-to-fixed');

            }else{
                winScroll = jQuery(window).scrollTop();
                $('.navbar-background').addClass('set-to-fixed').removeClass('move-top');
            }
            if(winScroll == 0){
                console.log('top');
                $('.navbar-background').removeClass('set-to-fixed');
            }
        });
    }
    jQuery(window).scroll(function(){
        var headerHeight = jQuery('.inner-pageh').outerHeight();
        if(jQuery(window).scrollTop() > headerHeight){
            jQuery('.page-sub-menu').addClass('fixed-submenu');
        }else{
            jQuery('.page-sub-menu').removeClass('fixed-submenu');
        }
    });


    jQuery('#category-dropdown li a').click(function(){
        var catAttr = jQuery(this).attr('id');
        jQuery('.news-list').hide();
        jQuery('.news-list[data-category='+ catAttr +']').fadeIn(200);
    });

    jQuery('#form-conatct').submit(function(){
        $("#form-conatct .contact-inp").each(function(){
            if($(this).val() == '') {
                jQuery(this).siblings('.validation-error').css('display', 'block');
            }else{
                 $("#form-conatct .contact-inp").siblings('.validation-error').hide();
            }
        });  
            return false;
    });
    
    $("#form-conatct .contact-inp").blur(function(){
        if($(this).val() == '') {
            jQuery(this).siblings('.validation-error').css('display', 'block');
        }else{
            
            $(this).siblings('.validation-error').hide();
        }
    });
    jQuery('.page-number a').click(function(e){
        e.preventDefault();
        jQuery('.page-number a').removeClass('active');
         jQuery(this).addClass('active');
    });

    if(jQuery(window).width() <=767){
        jQuery('.mega-dropdown a').click(function(){
            if(!jQuery(this).hasClass('active') && !jQuery(this).next('.dropdown-mwnu').is(':visible')){
                jQuery(this).addClass('active');  
                jQuery(this).next('.dropdown-mwnu').show();
            }else{
                jQuery(this).removeClass('active');  
                jQuery(this).next('.dropdown-mwnu').hide();
            }
            
        });
    }
    jQuery('.read-load-link').click(function(e){
        e.preventDefault();
        jQuery(this).parents('.member-intro').find('.expand-txt').slideToggle();
    });
     
});

