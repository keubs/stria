"use strict";

(function($) {
    $(document).ready(function() {
        // check is it mobile device
        function mobileDevice() {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                return true;
            } else {
                return false;
            }
        }
        // Sub menu active
        $('.menu-item-has-children').hover(
            function(){ $(this).toggleClass('sub-menu-active'); }
        );
        // add additional class if the page in iframe
        if (window.location !== window.parent.location) {
            if ( $('body').hasClass('woocommerce-page') || $('body').hasClass('error404') ) {
                $('body').addClass('itIsIframe');
            }
        }
        // initialize Swiper
        var galleryTop = new Swiper('.gallery-top', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            pagination: '.swiper-pagination',
            paginationClickable: true,
            spaceBetween: 2,
            touchRatio: 0.1,
            effect: 'slide',
            speed: 600,
            simulateTouch: true,
        });
        // if there is no gallery show main image and initialize Zoom
        if ($('.gallery-top').length == 0) {
            $('.woocommerce-main-image').show();
            if ($('body').hasClass('items-have-zoom')) {
                $('.images a img').wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom({
                    on: 'click',
                    touch: false,
                    duration: 300,
                    magnify: 1,
                    onZoomIn: function() {
                        $('#content').addClass('zoom-in');
                    },
                    onZoomOut: function() {
                        $('#content').removeClass('zoom-in');
                    }
                });
            }
            $('.images a').click(function(e) {
                e.preventDefault();
            });
        }
        $('.a2a_button_pinterest').click(function() {
            if ($('body').hasClass('itIsIframe')) {
                $('body', parent.window.document).addClass('pinterestIsOpened');
                $('body').bind("DOMSubtreeModified", function() {
                    $('div[id$="_hd"] a, div[id$="_ct"] span').click(function() {
                        $('body', parent.window.document).removeClass('pinterestIsOpened');
                    });
                });
            }
        });

        //  show coupon input by click
        $('#loor-have-coupon').click(function(e) {
            e.preventDefault();
            $(this).hide();
            $('div.coupon').fadeIn();
            $('div.coupon input.input-text').focus();
        });


        // open link in a new tab if it is iframe and it is ext link
        var $hostname;
        $hostname = new RegExp(location.host);
        $('.woocommerce-tabs a').each(function(){
            // Store current link's url
            var url = $(this).attr("href");
            if (!$hostname.test(url) && url.slice(0, 1) != "#") {
               $(this).attr('target','_blank');                        
            }
        });

        // initialize zoom except on mobile devices
        if ($('body').hasClass('items-have-zoom')) {
            if (!mobileDevice()) {
                $('.gallery-top .swiper-slide').zoom({
                    on: 'click',
                    touch: false,
                    duration: 300,
                    magnify: 1,
                    onZoomIn: function() {
                        $('#content').addClass('zoom-in');
                    },
                    onZoomOut: function() {
                        $('#content').removeClass('zoom-in');
                    }
                });
            }
        }
        // gallery
        var gallery = $('#blueimp-gallery').data('gallery');
        // for transperent header background
        if ($('body').hasClass('header-background')) {
            $(document).scroll(function(e) {
                if ($(this).scrollTop() > 20) {
                    $('body').addClass('fixed-header');
                } else {
                    $('body').removeClass('fixed-header');
                    $('body').removeClass('fixed-header-item-closed');
                }
            });
        }
        // lazy loading
        $("img.lazy").parent().addClass('lazy-loading');
        $("img.lazy").lazy({
            afterLoad: function(element) {
                element.parent().addClass('loaded');
            },
            delay: 100,
            effect: "fadeIn",
            effectTime: 800,
            threshold: 0
        });
        // get base url
        var baseUrl = document.location.origin;
        // creating tabs for main product menu of yumecommerce
        $(".yumecommerce-tab-category").eq(0).addClass("active");
        $(".yumecommerce-tab-links .yumecommerce-tab-link").click(function() {
            $(".yumecommerce-tab-links .yumecommerce-tab-link").removeClass("active").eq($(this).index()).addClass("active");
            $(".yumecommerce-tab-category").hide().removeClass("active").eq($(this).index()).addClass("active").fadeIn(600)
        }).eq(0).addClass("active");
        $("#yumecommerce-select-links").on('change', function() {
            var indexLink = this.selectedIndex;
            $(".yumecommerce-tab-links .yumecommerce-tab-link").eq(indexLink).trigger('click');
        });
        if ($('.yumecommerce-tab-links .yumecommerce-tab-link').length == 1) {
            $('.yumecommerce-tab-links, .yumecommerce-select-links-container').hide();
        }
        // add arrow for each select
        var arrow = '<span class="select-arrow"><svg xml:space="preserve" style="enable-background:new 0 0 451.847 451.847;" viewBox="0 0 451.847 451.847" height="11px" width="11px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751   c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0   c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"></path></svg></span>';
        if ( $('#tab-yumecommerce_product_tab select').css('display') != 'none') {
             $('#tab-yumecommerce_product_tab select').after(arrow);
        }
        $('#yumecommerce-select-links, .orderby').after(arrow);

        // add logic for input number
        $('.quantity').each(function() {
            var spinner = $(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');
            btnUp.click(function() {
                var oldValue = parseFloat(input.val());
                if (max == '') {
                    var newVal = oldValue + 1;
                } else {
                    if (oldValue >= max) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue + 1;
                    }
                }
                spinner.find("input").val(newVal);
                spinner.parent().find("button[data-quantity]").data("quantity", newVal);
                spinner.find("input").trigger("change");
            });
            btnDown.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= 1) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.parent().find("button[data-quantity]").data("quantity", newVal);
                spinner.find("input").trigger("change");
            });
        });
        // ajax loading items
        var windowscroll = 0;
        $('.yumecommerce-main-shop-nav ul li a.woocommerce-LoopProduct-link').click(function(event) {
            var page = $(this).attr('href');
            if ($('body').hasClass('header-background')) {
                // for transperent header background
                $("body").addClass("fixed-header-item");
            }
            window.history.pushState('obj', 'newtitle', page);
            windowscroll = $(window).scrollTop();
            $('#overlay_preloader, #overlay_preloader_icon').velocity("fadeIn", {
                duration: 'slow'
            });
            $('#overlay_preloader').promise().done(function() {
                page = page.substr(0, page.length - 1); // fix IE bag
                var iframe = $('<iframe src="' + page + '" frameborder="0" width="100%" scrolling="no" id="productFrame"></iframe>');
                iframe.appendTo('#producrContent');
                if (mobileDevice()) {
                    $('#producrContent iframe').css('width', '100vw'); // fix IOS bag
                }
                $('#productFrame').load(function() {
                    $("body, html").addClass("itemIsOpened");
                    $('#overlay_preloader_icon').velocity("fadeOut", {
                        duration: 300
                    });
                    $('#overlay_preloader').velocity("fadeOut", {
                        delay: 400,
                        duration: 'fast'
                    });
                    $("body, html").scrollTop(0);
                    $('#close-icon').velocity({
                        opacity: 1
                    }, {
                        visibility: "visible"
                    }, {
                        delay: 400,
                        duration: 300
                    });
                    var mydiv = $(this).contents().find("div.bodyBoxed");
                    var singleproductH = mydiv.height();
                    $('#productFrame', window.parent.document).height(singleproductH);
                    $('body, html', window.parent.document).height(singleproductH);
                });
            });
            return false;
        });
        // close single product
        $(".top-position-product").click(function() {
            if (!$('body').hasClass('itIsIframe')) {
                window.document.location = baseUrl;
            } else {
                $("#close-icon", window.parent.document).trigger("click");
            }
        });
        // next or previous product click
        $(".store-navigation-links a, form.cart .group_table a, .related.products a, button.single_add_to_cart_button.button.alt").click(function() {
            // backward animation
            $('body').addClass('animatedone');
            // show loading icon if it is iframe
            if ($('body').hasClass('itIsIframe')) {
                $('#overlay_preloader, #overlay_preloader_icon', window.parent.document).velocity("fadeIn", {
                    duration: 'slow'
                });
            }
        });
        $("#close-icon").click(function(e) {
            // backward animation
            $("#producrContent iframe").contents().find("body").addClass("animatedone");
            if (!$('body').hasClass('itemIsOpened')) {
                window.document.location = baseUrl;
            } else {
                window.history.replaceState('objs', 'title', baseUrl);
                if ($('body').hasClass('header-background')) {
                    // for transperent header background
                    $("body").addClass("fixed-header-item-closed");
                    $('body').removeClass('fixed-header-item');
                }
                $('#overlay_preloader #overlay_preloader_icon').hide();
                $('#close-icon').velocity({
                    opacity: 0
                }, {
                    visibility: "hidden"
                }, {
                    delay: 400,
                    duration: 300
                });
                $('#overlay_preloader').velocity("fadeIn", {
                    duration: 'slow'
                });
                $('#overlay_preloader').promise().done(function() {
                    $('body, html').height('auto');
                    $('body, html').removeClass("itemIsOpened").scrollTop(windowscroll);
                    $("body, html").promise().done(function() {
                        $('#overlay_preloader').velocity("fadeOut", {
                            duration: 'slow'
                        });
                        $('#producrContent').empty();
                        window.dispatchEvent(new Event('resize')); // fix bag with data-stretch-type of pagebuilder
                    });
                });
            }
        });
        // if history was changed - close single product
        window.onpopstate = function(event) {
            if ($('body').hasClass('itemIsOpened')) {
                $("#close-icon").trigger("click");
            }
        };
        // responsive tabs 
        var responsiveTabs = $('.woocommerce-tabs ul.tabs li').length;
        $('.woocommerce-tabs ul.tabs li').css("width", 100 / responsiveTabs + "%");
        // tab animation
        $('.woocommerce-tabs ul.tabs li').click(function() {
            if( !$(this).hasClass('active') ) {
                $('.wc-tab').addClass('wc-tab-animation').delay(50).queue(function() {
                    $(this).removeClass("wc-tab-animation");
                    $(this).dequeue();
                });
            }
        });
        // placeholders for comments
        if ( $('#commentform .comment-form-author label').length > 0 ) {
            var authorPlaceholder = $('#commentform .comment-form-author label').contents().get(0).nodeValue;
            $('#commentform .comment-form-author input').attr('placeholder', authorPlaceholder);
        }
        if ( $('#commentform .comment-form-email label').length > 0 ) {
            var emailPlaceholder = $('#commentform .comment-form-email label').contents().get(0).nodeValue;
            $('#commentform .comment-form-email input').attr('placeholder', emailPlaceholder);
        }
        if ( $('#commentform .comment-form-comment label').length > 0 ) {
            var textPlaceholder = $('#commentform .comment-form-comment label').contents().get(0).nodeValue;
            $('#commentform .comment-form-comment textarea').attr('placeholder', textPlaceholder);
        }
        
        // placeholders for checkout
        $(".form-row > label").each(function() {
            var label = $(this);
            var placeholder = label.text();
            label.parent(".form-row").find("input.input-text").attr("placeholder", placeholder);
        });
        // upadate count of items through iframe
        $('.itIsIframe .yumecommerceCart').bind("DOMSubtreeModified", function() {
            var parentBody = window.parent.document.body;
            var countcart = $('.yumecommerceCart .count').attr("data-count");
            $(".count", parentBody).attr("data-count", countcart);
        });
        // 100% height of iframe
        if ($('.itIsIframe').length > 0) {
            var refreshId = setInterval(function() {
                var mydiv = $('#productFrame', window.parent.document).contents().find("div.bodyBoxed");
                var singleproductH = mydiv.height();
                $('#productFrame', window.parent.document).height(singleproductH);
                $('body, html').height(singleproductH);
                $('body, html', window.parent.document).height(singleproductH);
            }, 500);
        }
        // remove scroll to
        $('.woocommerce-product-rating .woocommerce-review-link').click(function() {
            return false;
        });
        // mobile nav
        $('#nav-icon').click(function() {
            $('body').addClass('mobile-nav-active');
            $('#nav-obfuscator').velocity("fadeIn", {
                duration: 300
            });
        });
        $('#nav-obfuscator').click(function() {
            $('body').removeClass('mobile-nav-active');
            $('#nav-obfuscator').velocity("fadeOut", {
                duration: 300
            });
        });
    
        if (!mobileDevice()) {
            // add paralax effect to main slider class
            $( "#slider-parallax > div > div" ).attr( 'data-parallax', '{"y" : 280, "smoothness": 0}' );
            $( "#slider-parallax .sow-slider-image-wrapper" ).attr( 'data-parallax', '{"y" : -280, "smoothness": 14}' );
        }
    });
    
    // masonry blog options
    $(window).load(function(){
        if ( $('body').hasClass('masonry') ) {
            $('.yumecommerce-posts-container').masonry({
            columnWidth: '.grid-sizer',
            gutter: '.gutter-sizer',
            itemSelector: '.yumecommerce-post-container',
            percentPosition: true
            });
        }
    });

    // fix video background of pagebuilder
    // var VideoID = $('.sow-slider-image > iframe[src*="youtube.com"]').attr('src');
    // VideoID = VideoID.substring(VideoID.indexOf('ed/') +3).split('?')[0];
    // console.log(VideoID);

    // YumeCommerce Widgets Bundle
    // Tabs
    $(document).ready(function($){
        $('.soua-tab ul.soua-tabs').addClass('active').find('> li:eq(0)').addClass('current');

        $('.tab_content .tabs_item:eq(0)').each( function() {
            $(this).parent().height($(this).outerHeight(true));
        });

        $('.soua-tab ul.soua-tabs li a').click(function (g) {
            var tab = $(this).closest('.soua-tab'),
                index = $(this).closest('li').index();

            tab.find('ul.soua-tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');

            var  tabtoclose = tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')');
            var  tabtoopen = tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')');

            tabtoopen.parent().height(tabtoopen.outerHeight(true));

            if ($(this).data("effect") === 'slide') {
                tabtoclose.velocity("slideUp", {duration: 500});
                tabtoopen.velocity("slideDown", {duration: 500});
            } else {
                tabtoclose.velocity("fadeOut", {duration: 500});
                tabtoopen.velocity("fadeIn", {duration: 1500});
            }

            g.preventDefault();
        });
    });

})(jQuery);