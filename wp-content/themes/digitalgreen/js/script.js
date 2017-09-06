jQuery(document).ready(function(){
        jQuery('body').addClass('page-animate');
        jQuery(".home-page-search").hide();
        jQuery('.icon-vimeo').hide();
        jQuery(".search-button").click(function() {
            var top = jQuery(".search-input").css("top");
             if (top == '-152px'){
                jQuery(".search-input").animate({'top': '100%'}, 500);
            }else{
                 jQuery(".search-input").animate({'top': '-152px'}, 500);
            }
        });

        if(location.hash){
        jQuery('html, body').animate({
            scrollTop: jQuery(location.hash).offset().top - 50
        }, 1000, 'linear');
    }

    jQuery('#filter-field').change(function(){
        alert(jQuery(this).val());
    });


        // jQuery('.gray-box-wrap .gray-box-title').mouseenter(function(){
        //     jQuery(this).css('background-color','#000');
        // });

        // jQuery('.gray-box-wrap .gray-box-title').mouseleave(function(){
        //     jQuery(this).css('background-color','#f8f9fb');
        // });

        jQuery('.redirect-team-member a').on('click',function(e) {
            $('html, body').animate({
                scrollTop: $(window.location.hash).offset().top  // Target hash not div
            }, 0);
        });


        $('ul.nav li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(100).slideDown(200);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
        });

        jQuery('header.header-home').mouseenter(function(){
            $('.navbar-header a img.white-logo').css('display','none');
            $('.navbar-header a img.gray-logo').css('display','block');
            $('.navbar-collapse ul li a').css('color','#9BA0A7');
        });
        jQuery('header.header-home').mouseleave(function(){
            if($(window).scrollTop() < 50){
                $('.navbar-header a img.white-logo').css('display','block');
                $('.navbar-header a img.gray-logo').css('display','none');
                $('.navbar-collapse ul li a').css('color','#fff');
            }
            else{
                $('.navbar-header a img.white-logo').css('display','none');
                $('.navbar-header a img.gray-logo').css('display','block');
                $('.navbar-collapse ul li a').css('color','#9BA0A7');
        }
        });


    function sticky_relocate() {
        var window_top = $(window).scrollTop();
        if(typeof $('#sticky-anchor').offset() === "undefined"){
            
        }
        else {
            var div_top = $('#sticky-anchor').offset().top;
            if (window_top > div_top) {
                $('#sticky').addClass('stick');
                $('#sticky-anchor').height($('#sticky').outerHeight());
            } else {
                $('#sticky').removeClass('stick');
                $('#sticky-anchor').height(0);
            }
        }
    }


    $(function() {
        $(window).scroll(sticky_relocate);
        sticky_relocate();
    });

    jQuery('.navbar-toggle').click(function(){
        if(jQuery('.navbar-collapse').is(':visible')){
            jQuery('.navbar-collapse').slideUp();
            jQuery(this).removeClass('close-menu');
        }else{
            jQuery('.navbar-collapse').slideDown();
            if(jQuery('.header-home').offset() === 'undefined'){

            }else{
                jQuery('.navbar-collapse').css('background-color','black')
                $('.navbar-collapse ul li a').css('color','#fff');
            }
            jQuery(this).addClass('close-menu');
        }
    });


    jQuery('.mega-dropdown').mouseenter(function() {
        jQuery(this).find('ul').css({'z-index':'300'}).stop().slideDown(250, "linear");
    });

    jQuery('.mega-dropdown').mouseleave(function() {
        jQuery(this).find('ul').css({'z-index':'0'}).stop().slideUp(100, "linear");
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
                infinite: true,
                responsive: [
                    {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 1,
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
                slidesToShow: 5,
                dots: false,
                infinite: true,
                slidesToScroll: 1,
                speed: 1500

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
            focusOnSelect: true,
            infinite: false,
            asNavFor: '.timeline-info-slider',
            arrows: true,
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

    jQuery('.sub-menu-title li').click(function(e){
        // jQuery('.activemenu').removeClass('activemenu');
        var thisHref = jQuery(this).find('a').attr('href');
        jQuery('html, body').animate({
        scrollTop: jQuery(thisHref).offset().top-100
      }, 1000);
        e.preventDefault();
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
        if(jQuery(this).siblings('.collapse-project').is(':visible')){
            jQuery(this).siblings('.collapse-project').slideUp();
        }else{
            jQuery(this).siblings('.collapse-project').slideDown();
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
        // e.preventDefault();
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

    var activeList = jQuery('.tab-list li.active').attr('data-index');
    jQuery('.tab-options-list[data-id='+ activeList +']').fadeIn();
    jQuery('.tab-options-list[data-id='+ activeList +'] li:first-child a').addClass('active');
    jQuery('.partners-container[data-index='+ activeList +']').fadeIn(500).addClass('active');
    

    jQuery('.tab-list li').click(function(){
        var thisDataIndex = jQuery(this).data('index');
        jQuery('.tab-list li').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.tab-options-list').fadeOut();
        jQuery('.tab-options-list[data-id='+ thisDataIndex +'] li:first-child a').addClass('active');

        jQuery('.current-opening-disc').hide();
        jQuery('.tab-options-list[data-id='+ thisDataIndex +']').fadeIn(500);

        jQuery('.partners-container').hide();
        jQuery('.partners-container[data-index='+ thisDataIndex +']').fadeIn(500).addClass('active');
        jQuery('.partners-container[data-index='+ thisDataIndex +'] .gray-box-tabbing:first-child').show();
    });

    jQuery('.tab-options-list li a').click(function(e){
        e.preventDefault();
        jQuery('.tab-options-list li a').removeClass('active');
        jQuery(this).addClass('active');
        var thisId = jQuery(this).data('id');
        jQuery('.partners-container .gray-box-tabbing').hide();
        jQuery('.partners-container .gray-box-tabbing[id='+ thisId +']').show();
    });

    jQuery('.scroll-top').click(function(){
         jQuery('html,body').animate({ scrollTop: 0 }, 800);
        return false; 
    });


        jQuery('#logo_slider li, #logo_slider li:first-child').removeClass('active-arrow');
        jQuery('.award-content .logo-details').removeClass('hover-on');
        var currentSlide = jQuery('#logo_slider').slick('slickCurrentSlide');
        var totalSlides = jQuery('#logo_slider').slick('getSlick').slideCount;
        var target_slide = (currentSlide%totalSlides)+1;
        // var target_pos = jQuery('.award-content .logo-details[data-index='+ target_slide +']').position().left;        
        jQuery('#logo_slider li[data-index='+ target_slide +']').addClass('active-arrow');            
        jQuery('.award-content .logo-details[data-index='+ target_slide +']').addClass('hover-on');            

        // jQuery('.award-content .logo-details:first-child').addClass('hover-on');
        // jQuery('#logo_slider li:first-child').addClass('active-arrow');
        jQuery('#logo_slider li').hover(function(){
            var thisPos = jQuery(this).position().left;
            var dataIndex = jQuery(this).data('index');
            jQuery('#logo_slider li, #logo_slider li:first-child').removeClass('active-arrow');
            jQuery(this).addClass('active-arrow');
            jQuery('.award-content .logo-details:first-child').removeClass('hover-on');
            jQuery('.award-content .logo-details').removeClass('hover-on');
            jQuery('.award-content .logo-details[data-index='+ dataIndex +']').addClass('hover-on').find('.triangle-up').css('left', thisPos + 70);
            jQuery('.award-content .logo-details[data-index='+ dataIndex +']').show(800);
        }, 
        function(){
            jQuery('#logo_slider li, #logo_slider li:first-child').removeClass('active-arrow');
            jQuery('.award-content .logo-details').removeClass('hover-on');
            var currentSlide = jQuery('#logo_slider').slick('slickCurrentSlide');
            var totalSlides = jQuery('#logo_slider').slick('getSlick').slideCount;
            var target_slide = (currentSlide%totalSlides)+1;
            var target_pos = jQuery('.award-content .logo-details[data-index='+ target_slide +']').position().left;        
            jQuery('#logo_slider li[data-index='+ target_slide +']').addClass('active-arrow').addClass('active-arrow');            
            jQuery('.award-content .logo-details[data-index='+ target_slide +']').addClass('hover-on');
        });

        jQuery('#logo_slider .slick-next').click(function(){
            jQuery('#logo_slider li, #logo_slider li:first-child').removeClass('active-arrow');
            jQuery('.award-content .logo-details').removeClass('hover-on');
            var currentSlide = jQuery('#logo_slider').slick('slickCurrentSlide');
            var totalSlides = jQuery('#logo_slider').slick('getSlick').slideCount;
            var target_slide = (currentSlide%totalSlides)+1;
            var target_pos = jQuery('.award-content .logo-details[data-index='+ target_slide +']').position().left;        
            jQuery('#logo_slider li[data-index='+ target_slide +']').addClass('active-arrow');            
            jQuery('.award-content .logo-details[data-index='+ target_slide +']').addClass('hover-on');
    });
        jQuery('#logo_slider .slick-prev').click(function(){
            jQuery('#logo_slider li, #logo_slider li:first-child').removeClass('active-arrow');
            jQuery('.award-content .logo-details').removeClass('hover-on');
            var currentSlide = jQuery('#logo_slider').slick('slickCurrentSlide');
            var totalSlides = jQuery('#logo_slider').slick('getSlick').slideCount;
            var target_slide = (currentSlide%totalSlides)+1;
            var target_pos = jQuery('.award-content .logo-details[data-index='+ target_slide +']').position().left;        
            jQuery('#logo_slider li[data-index='+ target_slide +']').addClass('active-arrow');            
            jQuery('.award-content .logo-details[data-index='+ target_slide +']').addClass('hover-on');
    });



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
    jQuery('#category-dropdown li a').click(function(){
        var catAttr = jQuery(this).attr('id');
        jQuery('.news-list').hide();
        jQuery('.news-list[data-category='+ catAttr +']').fadeIn(200);
    });


    /* 

    Case Studies, Financials, Annual Report filter and Load More Section

    */
    jQuery('.case-studies-dropdown li a').click(function(){
        catAttr = jQuery(this).attr('id');

        //Show All items
        if(catAttr === "-1"){
            jQuery('.case-studies-div .col-lg-4').show();
            $('.load-more').hide();
        }

        //Apply filters
        else{
            jQuery('.case-studies-div .col-lg-4').hide();
            jQuery('.case-studies-div .col-lg-4[data-category='+ catAttr +']').show();

            //Update size_li after applying filter
            size_li = jQuery(".case-studies-div .col-lg-4[data-category="+ catAttr +"]").length;
            x = 3;
            y = x - 1;

            //Show first 3 items
            jQuery('.case-studies-div .col-lg-4[data-category='+ catAttr +']:gt('+y+')').hide();
            if(x >= size_li)
                $('.load-more').hide();
            else
                $('.load-more').show();
        }
    });

    size_li = jQuery(".case-studies-div > div").length;
    x=3;
    if(size_li <= 3)
        $('.load-more').hide();
    
    jQuery('.case-studies-div div.col-lg-4:lt('+x+')').show();
    jQuery('.load-more').click(function (e) {
        e.preventDefault();
        x = (x+3 <= size_li) ? x+3 : size_li;
        if(typeof catAttr === 'undefined')
            jQuery('.case-studies-div div.col-lg-4:lt('+x+')').show();
        else
        {   
            // jQuery('.case-studies-div div.col-sm-4:nth-child(3n+1)').css('margin-left', '52px');
            jQuery('.case-studies-div div.col-lg-4[data-category='+ catAttr +']:lt('+x+')').show();

        }

        if(x == size_li){
            $('.load-more').hide();
        }
        
    });

    /* 
   Filter , Load More Section End 
    */



    jQuery('#form-conatct').submit(function(){
        $("#form-conatct .contact-inp").each(function(){
            if($(this).val() == '') {
                jQuery(this).siblings('.validation-error').css('display', 'block');
            }else{
                 $("#form-conatct .contact-inp").siblings('.validation-error').hide();
            }
        });  
            return true;
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
        //jQuery(this).parents('.member-intro').find('.expand-txt').slideToggle();
        var paraHeight = jQuery(this).parents('.member-intro').find('p').height();
        if(jQuery(this).siblings('.member-content').height() == 154){
            jQuery(this).html('Read Less <span class="icon icon-up-arrow"></span>');
            jQuery(this).parents('.member-intro').find('.member-content').animate({'height':paraHeight + 30}, 500);
        }else{
            jQuery(this).html('Read More <span class="icon icon-down-arrow"></span>');
            jQuery(this).parents('.member-intro').find('.member-content').animate({'height':'154px'}, 500);
        }
    });
     
     // $(window).scroll( $.throttle( 250, pageScroll ) );

     function getVideoid(url) {
       var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
       var match = url.match(regExp);

        if (match && match[2].length == 11) {
           return match[2];
        } else {
           return 'error';
        }
    }

   // play video in popup
    jQuery('.watch-link').click(function(e){
        // jQuery('html, body').animate({
        // scrollTop: jQuery("#my-modal").offset().top - 100
        //     }, 500);
        e.preventDefault();
        // jQuery('#my-modal').addClass('in');
        var videoUrl = jQuery(this).attr('data-url');
        var videoId = getVideoid(videoUrl);
        var iframe=document.getElementById("iframeYoutube");
        iframe.src="https://www.youtube.com/embed/"+videoId+"?autoplay=1";
        jQuery('body').css('overflow', 'hidden');
    });
    jQuery('.close').click(function(){
        // jQuery('#my-modal').removeClass('in');
        jQuery('.video-player').attr("src", '');
        jQuery('body').css('overflow', 'visible');
    });


    // play video in popup
    jQuery('.testimonial-link').click(function(e){
        // jQuery('html, body').animate({
        // scrollTop: jQuery("#my-modal").offset().top - 100
        //     }, 500);
        e.preventDefault();
        // jQuery('#my-modal').addClass('in');
        var videoUrl = jQuery(this).attr('data-url');
        var videoId = getVideoid(videoUrl);
        var iframe=document.getElementById("iframeYoutube");
        iframe.src="https://www.youtube.com/embed/"+videoId+"?autoplay=1";
        jQuery('body').css('overflow', 'hidden');
    });
    jQuery('.close').click(function(){
        // jQuery('#my-modal').removeClass('in');
        jQuery('.video-player').attr("src", '');
        jQuery('body').css('overflow', 'visible');
    });
});

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');

        }
    else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
            $('header').css('background-color','rgba(255,255,255, 1)');
            if(typeof jQuery('.header-home').offset() === 'undefined'){
                
            }
            else{
                $('.navbar-header a img.white-logo').css('display','none');
                $('.navbar-header a img.gray-logo').css('display','block');
                $('.navbar-collapse ul li a').css('color','#9BA0A7');
            }

        }

        if($(window).scrollTop() == 0){
            if(typeof jQuery('.header-home').offset() === 'undefined'){
                
            }
            else{
                // $.fn.fullpage.setAllowScrolling(true);
                // jQuery('body, html').css({'overflow': 'hidden'});
                if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && scrollTop <= 50 && !jQuery('html').hasClass('fp-enabled')) {
                    $('#fullpage').fullpage(options);
                    jQuery(window).scrollTop(0);
                    $('#fp-nav').fadeIn();
                } 
                else 
                {
                    if(jQuery(window).scrollTop() == 0){
                        $.fn.fullpage.setAllowScrolling(true);
                        jQuery('body, html').css({'overflow': 'hidden'});
                    }else{
                        $.fn.fullpage.setAllowScrolling(false);
                        jQuery('body, html').css({'overflow': 'visible'});
                    }
                    jQuery('.header-slider').css('pointer-events', 'auto');
                    jQuery('.header-slider').css('-webkit-pointer-events', 'auto');
                }
                $('header').css('background-color','rgba(255,255,255,0)');
                $('.navbar-header a img.gray-logo').css('display','none');
                $('.navbar-header a img.white-logo').css('display','block');
                $('.navbar-collapse ul li a').css('color','#fff');
            }
        }
    }

     if((st + $(window).innerHeight() + 150) >= jQuery('.dg-footer').offset().top){
        jQuery('.dg-footer').addClass('active-footer');
    }

    if(typeof jQuery('.our-solution').offset() === 'undefined'){

    }
    else{
        if(st >= jQuery('.our-solution').offset().top - 100){
                $('#fp-nav').fadeOut();
            }else{
                $('#fp-nav').fadeIn();
            }
    }
    
    lastScrollTop = st;
}

// var lastScroll = 0, scrollTop = 0;
// function pageScroll(){
//     scrollTop = jQuery(window).scrollTop();
//     var pivotElementPos =  $('.navbar-background').outerHeight();

//     if(jQuery('.header-slider').length){
//         if (lastScroll >= scrollTop) {
//             if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && scrollTop <= 50 && !jQuery('html').hasClass('fp-enabled')) {
//                 $('#fullpage').fullpage(options);
//                 jQuery(window).scrollTop(0);
//                 $('#fp-nav').fadeIn();
//             } else {
//                 if(jQuery(window).scrollTop() == 0){
//                     $.fn.fullpage.setAllowScrolling(true);
//                     jQuery('body, html').css({'overflow': 'hidden'});
//                 }else{
//                     $.fn.fullpage.setAllowScrolling(false);
//                     jQuery('body, html').css({'overflow': 'visible'});
//                 }
//                 jQuery('.header-slider').css('pointer-events', 'auto');
//                 jQuery('.header-slider').css('-webkit-pointer-events', 'auto');
//             }
//         }
//         if(scrollTop >= jQuery('.our-solution').offset().top - 100){
//             $('#fp-nav').fadeOut();
//         }else{
//             $('#fp-nav').fadeIn();
//         }
//         pivotElementPos = jQuery('.our-solution').offset().top - 100;
//     }

//     if(scrollTop > lastScroll && scrollTop >= pivotElementPos && jQuery(window).width() > 1024){
//         $('.navbar-background').addClass('move-top').removeClass('set-to-fixed'); 
//     }else{
//         if (scrollTop < lastScroll) {
//             $('.navbar-background').addClass('set-to-fixed').removeClass('move-top');    
//         } 
//     }

//     if(scrollTop == 0){
//         $('.navbar-background').removeClass('set-to-fixed');
//     }
//     if((scrollTop + $(window).innerHeight() + 150) >= jQuery('.dg-footer').offset().top){
//         jQuery('.dg-footer').addClass('active-footer');
//     }
//     var headerHeight = jQuery('.inner-pageh').outerHeight();
//     if(jQuery(window).scrollTop() > headerHeight){
//         jQuery('.page-sub-menu').addClass('fixed-submenu');
//     }else{
//         jQuery('.page-sub-menu').removeClass('fixed-submenu');
//     }
//     lastScroll = jQuery(window).scrollTop();
// }