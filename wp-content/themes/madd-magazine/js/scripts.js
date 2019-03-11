(function ($, root, undefined) {

    $(document).ready(function () {

        'use strict';

        var touch = $('#touch-menu');
        var menu = $('.site-navigation');

        $(touch).on('click', function (e) {
            e.preventDefault();
            menu.slideToggle();
            touch.toggleClass("on");
        });

        $(window).resize(function () {
            var w = $(window).width();
            if (w > 992 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });

        function fullWindow() {
            $(".fullwindow").css("min-height", $(window).height() - $(".header").height() - $(".footer").height());
        }
        ;
        fullWindow();

        $(window).resize(function () {
            fullWindow();
        });

        var homeSlider = new Swiper('.home-slider', {
            loop: true,
            speed: 800,
            autoplay: {
                delay: 30000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.slide-next',
                prevEl: '.slide-prev',
            },
        });

        $(function () {
            var adjustArticleHeights = (function () {
                var leftColumnHeight = 0,
                        rightColumnHeight = 0,
                        $articles = $('.feed-wrap article');
                for (var i = 0; i < $articles.length; i++) {
                    if (leftColumnHeight > rightColumnHeight) {
                        rightColumnHeight += $articles.eq(i).addClass('right').outerHeight(true);
                    } else {
                        leftColumnHeight += $articles.eq(i).outerHeight(true);
                    }
                }
                return $articles;
            })();
        });

    });

    var count = 2;
    var callAPI = true;
    $(window).scroll(function () {
        if ($(window).scrollTop() >= $(document).height() - $(window).height() - 400) {
            if (callAPI) {
                funCallAPI();
            }
        }
    });
    function funCallAPI(template = 'category-loop') {
        callAPI = false;
        var catId = $('.page-content').attr('data-attr-category');
        if (catId && catId.length > 0) {
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                type: 'POST',
                data: "action=infinite_scroll&page_no=" + count + '&loop_file=' + template + '&cat_id=' + catId,
                success: function (html) {
                    callAPI = true;
                    count++;
                    $(".page-content").append(html);    // This will be the div where our content will be loaded
                }
            });
        }


    }
    
    
      var countHome = 1;
    var callAPIHome = true;
    $(window).scroll(function () {
        
        if ($(window).scrollTop() >= $(document).height() - $(window).height() - 400) {
            if (callAPIHome) {
                funCallAPIHome();
            }
        }
    });
    
    function funCallAPIHome(){
        callAPIHome = false;
        var flag = $("#infinity-home-page");
        if (flag && flag.length > 0) {
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                type: 'POST',
                data: "action=infinite_scroll_home&page_no=" + countHome,
                success: function (html) {
                    callAPIHome = true;
                    countHome++;
                    $("#infinity-home-page .add-content").append(html);    // This will be the div where our content will be loaded
                }
            });
        }
        
    }




})(jQuery, this);

