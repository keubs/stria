"use strict";

(function($) {
    // if document is not loaded for 9s hide loading overlays
    setTimeout(function() {
        if(document.readyState !== 'complete') {
            $('#overlay_preloader, #overlay_preloader_icon').hide();
            $('body').fadeIn();
        }
    }, 9000);

    $(window).load(function() {
        // show page after page is loaded
        $('body:not(.home)').velocity({
            opacity: 1
        }, {
            duration: 700
        });

        // add animation after page is loaded
        if ($('body').hasClass('single-product')) {
            setTimeout(function() {
                $('body').addClass('animate');
            }, 160);
        }
        if ($('body').hasClass('home')) {
            $('#overlay_preloader, #overlay_preloader_icon').velocity("fadeOut", {
                duration: 'slow'
            });
        }
    });
    $('document').ready(function() {
        if ($('body').hasClass('home')) {
            $('body').velocity("fadeIn", {
                duration: 'slow'
            });
        }
        // prevant default link
        var href = '';
        $('.widget.woocommerce a, .woocommerce-cart .cross-sells a, .widget_recent_entries a, .widget_recent_comments a, .widget_archive a, .widget_categories a, .widget_meta a, .standard-store.woocommerce-page #content .products li a, a.checkout-button.button.alt.wc-forward, a.author-link, .nav-links a, form.cart .group_table a, .related.products a, .store-navigation-links a, .wc-proceed-to-checkout a, #mobile-nav a, header.bodyBoxed a, .yumecommerce-post-container a, .yumecommerce-post-pagination a, .footer a[target!="_blank"], .recent-posts-container a, a.checkout-button').click(function(e) {
            e.preventDefault();
            href = $(this).attr("href");
            smoothLoad();
        });
        $('button.single_add_to_cart_button').click(function(e) {
            e.preventDefault();
            var buttonForm = $(this);
            $('body').addClass('smoothLoad');
            $('body').velocity({
                opacity: 0
            }, {
                duration: 800,
                complete: function() {
                    buttonForm.parents("form").submit();
                }
            });
            
        });
        // fadeout page before change the location
        function smoothLoad() {
                $('body').addClass('smoothLoad');
                $('body').velocity({
                    opacity: 0
                }, {
                    duration: 800,
                    complete: function() {
                        window.location = href;
                    }
                });
            }
        // redirect to the page from iframe
        $('.woocommerce-message a, .woocommerce-error a, #yumecommerce-custom-footer-widgets a, .product_meta a, .must-log-in a').click(function(e) {
            e.preventDefault();
            var hrefCart = $(this).attr("href");
            $('body').addClass('smoothLoad');
            $('body', parent.window.document).velocity({
                opacity: 0
            }, {
                duration: 800,
                complete: function() {
                    parent.window.document.location = hrefCart;
                }
            });
        });
        // if go popstate
        function goBack() {
            if ($('body').hasClass('smoothLoad')) {
                $('body').velocity({
                    opacity: 1
                }, 800, function() {
                    $('body').removeClass('smoothLoad');
                });
            }
        }

        $(window).on('popstate', function(e) {
            goBack();
        });
    });
})(jQuery);