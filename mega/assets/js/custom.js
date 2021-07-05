(function ($) {

    // 배너이미지 슬라이더
    var mySwiper = new Swiper(".swiper-container", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
        },
        autoplay: {
            delay: 5000,
        },
    });

    // 영화차트 이미지 슬라이드
    var mySwiper = new Swiper('.swiper-container2', {
        slidesPerView: 4,
        spaceBetween: 24,

        mousewheel: {
            invert: true,
        },

        keyboard: {
            enabled: true,
            onlyInViewport: false,
        },

        autoplay: {
            delay: 6000,
        },

        breakpoints: {
            600: {
                slidesPerView: 1.4,
                spaceBetween: 24
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 24
            },
            960: {
                slidesPerView: 3,
                spaceBetween: 24
            }
        }

    });

    // 영화차트 텝메뉴

    var movieBtn = $(".movie_title > ul > li");
    var movieCont = $(".movie_chart > div");

    movieCont.hide().eq(0).show();

    movieBtn.click(function (e) {
        e.preventDefault();
        var target = $(this);
        var index = target.index();
        movieBtn.removeClass("active");
        target.addClass("active");
        movieCont.css("display", "none");
        movieCont.eq(index).css("display", "block");

    });

    //공지사항 템 메뉴
    var tabMenu = $(".notice");

    // 컨텐츠 내용을 숨김
    tabMenu.find("ul > li > ul").hide();
    tabMenu.find("li.active > ul").show();

    function tabList(e) {
        e.preventDefault();
        var targer = $(this);
        targer.next().show().parent("li").addClass("active").siblings("li").removeClass("active").find("ul").hide();

    }

    tabMenu.find("ul > li > a").click(tabList).focus(tabList);

})(jQuery);