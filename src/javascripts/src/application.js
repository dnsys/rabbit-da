class Application{
    constructor(){
        this._initScroll();
        this._initSlider();
        this._initSmothScroll();
        this._initPopup();
        this._initScrollLink();
        this._initShowMoreCases();
        this._menuToggle();
        this._changeBg();
        this._initTabs();
        this._events()
        this._paginationToggle();
    }

    _events(){

        /*$(document).on('click touch', '.pagination-el__page', function (e) {
         e.preventDefault();

         if(this.hash == '#') return;

         let $elem = $(this.hash);

         if($elem.length > 0){
         let scrollTo = $elem.position().top;

         $('html, body').animate({
         'scrollTop' : scrollTo
         }, 500);
         }
         });*/

    }

    _initShowMoreCases(){
        let $btnShowMore = $('.js-show-more');
        let $casesContent = $('.cases');

        $btnShowMore.on('click', function () {
            let $this = $(this);
            let curPage = $this.data('page');
            let nextPage = curPage + 1;
            $this.attr('disabled', 'disabled');

            $.ajax({
                method: 'GET',
                dataType: 'json',
                url: '/includes/getCase.php?page=' + nextPage,
            })
            .done(function (data, textStatus, $xhr) {
                let newCases = '';
                console.log(data);
                if(data.length > 0){
                    let inc = ((curPage + 1) % 2);
                    let index = (($('.cases__row').length * 2) + 1);
                    for(let i = 0; i < data.length; ){
                        let row = '<div class="cases__row">';
                        let item = data[i];
                        row += '<div class="cases__item cases__item--pad-right ' + (( inc % 2 != 0) ? 'cases__item--offset-top' : '')  + '">'+
                                    '<a href="/case.php?id='+ data[i].id +' " class="cases__item-wrapper">'+
                                        '<div class="cases__item-bg" style="background-image: url(/admin/data/cases/icon-' + item.icon_path + '"></div>'+
                                            '<div class="cases__item-bg-hover"></div>'+
                                            '<div class="cases__border-hover"></div>'+
                                            '<div class="cases__item-inner">'+
                                            '<div class="cases__item-number">.00'+ index++ +'</div>'+
                                            '<div class="cases__item-title">'+
                                                item.name +
                                            '</div>'+
                                        '</div>'+
                                    '</a>'+
                                '</div>';

                        i++;

                        if(!!data[i]) {

                            item = data[i];

                            row += '<div class="cases__item cases__item--pad-left ' + (( inc % 2 == 0) ? 'cases__item--offset-top' : '') + '">' +
                                    '<a href="/case.php?id=' + data[i].id + ' " class="cases__item-wrapper">' +
                                        '<div class="cases__item-bg" style="background-image: url(/admin/data/cases/icon-' + item.icon_path + '"></div>' +
                                            '<div class="cases__item-bg-hover"></div>' +
                                            '<div class="cases__border-hover"></div>' +
                                            '<div class="cases__item-inner">' +
                                            '<div class="cases__item-number">.00'+ index++ +'</div>' +
                                            '<div class="cases__item-title">' +
                                                item.name +
                                            '</div>' +
                                        '</div>' +
                                    '</a>' +
                                '</div>';
                        }

                        i++;

                        row += '</div>';

                        newCases += row;

                        inc++;

                    }
                    let $cases =$(newCases)
                        .filter('.cases__row')
                        .css('opacity', 0);

                    $casesContent.append($cases);

                    $cases.animate({
                       'opacity' : 1
                    }, 600);

                    curPage = nextPage;
                    $this.data('page', curPage);
                    $this.attr('disabled', '');

                    if(data.length < 10){
                        $this.hide();
                    }
                }
            })
            .fail(function ($xhr, textStatus, error) {

            });
        })
    }

    _initSmothScroll(){
        this._scrollSpeed = jQuery.scrollSpeed(100, 1500);
    }

    _initTabs(){
        $('.clients__tabs-content').tabbedContent({
            links: '.agency-brands_switch a',
            history: false,
        });
        $('.actions__tabs-content').tabbedContent({
            links: '.pagination-el__main a',
            history: false,
            speed  : 1000,
        });
        $('.our-actions__tabs-content').tabbedContent({
            links: '.pagination-el__actions a',
            history: false,
            speed  : 1000,
        });
    }

    _initSlider(){
        let sliders = $('.case-page__slider');
        sliders.each(function () {
            let $this = $(this);
            let $slider = $this.find('.case-page__carousel');
            let $sliderBg = $this.find('.case-page__carousel-bg');

            $slider.on('initialized.owl.carousel changed.owl.carousel', function(e) {
                //if (!e.namespace || e.property.name != 'position') return;
                var current = e.item.index;
                var src = $(e.target).find(".owl-item").eq(current).find("img").attr('src');
                console.log('Image current is ' + src);
                // $sliderBg.css({ 'background-image': 'url(' + src + ')'});

                var items_per_page = e.page.size;

                if (items_per_page > 1){

                    var min_item_index  = e.item.index,
                        max_item_index  = min_item_index + items_per_page,
                        display_text    = (min_item_index+1) + '-' + max_item_index;

                } else {

                    var display_text = (e.item.index+1);

                }

                $this.find('.case-page__slider-counter').html( display_text + ' / ' + e.item.count);
            });

            $slider.owlCarousel({
                items: 1,
                autoHeight:true,
                mouseDrag: false,
                nav: true,
                navText: [
                    '',
                    ''
                ],
                dots: false,
                navContainer: '.case-page__slider-nav'
            });

            $sliderBg.owlCarousel({
                items: 1,
                autoHeight:true,
                mouseDrag: false,
                nav: false,
                navText: [
                    '',
                    ''
                ],
                dots: false,
            });

            $('.case-page__slider-nav .owl-prev').on('click', function () {
                $sliderBg.trigger('prev.owl.carousel');
                console.log('owl-prev');
            });

            $('.case-page__slider-nav .owl-next').on('click', function () {
                $sliderBg.trigger('next.owl.carousel');
                console.log('owl-next');
            });

            if($('.owl-item').length < 1){
                $('.case-page__slider-nav ').hide();
            }else{
                $('.case-page__slider-nav ').show();
            }
        });
    }

    _initPopup(){

        let _this = this;

        $('.js-popup').magnificPopup({
            type:'inline',
            showCloseBtn: false,
            removalDelay: 300,
            fixedContentPos: true,
            fixedBgPos: true,
            mainClass: 'mfp-with-zoom',
            midClick: true,
            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function(openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            },
            callbacks: {
                open: function () {
                    _this._scrollSpeed.removeScrollSpeed();
                    console.log('open');
                },
                close: function () {
                    _this._initSmothScroll()
                }
            }
        });
    }

    _initScrollLink(){
        jQuery('.contact-link a').each( function() {
            let $this = jQuery(this),
                target = this.hash;
            $this.click(function (e) {
                if(target == '#' || target == '') {
                    // Do nothing
                } else {
                    e.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: (jQuery(target).offset().top) - 60
                    }, 1000);
                }
            });
        });
    }

    _paginationToggle(){
        $('.pagination-el__main a').on('click', function () {
            var $this = $(this);
            $('.pagination-el__main a').removeClass('active');
            $this.addClass('active');
        });
        $('.pagination-el__actions a').on('click', function () {
            var $this = $(this);
            $('.pagination-el__actions a').removeClass('active');
            $this.addClass('active');
        });
    }


    _menuToggle(){
        $('.burger').on('click touch', function () {

            $(this).toggleClass('burger--active');

            $('#menu-switch').toggleClass('menu-switch--open')
        });
    }

    _changeBg(){
        var imgUrl = $('.owl-item .active').find();

    }

    _initScroll(){
        let _this = this;

        this._scrollController = new ScrollMagic.Controller();

        // new ScrollMagic.Scene({duration: "600"})
        //     .setTween(TweenMax.to('#small-shuttle', 1, {top: 500, ease: Linear.easeNone}))
        //     .addIndicators()
        //     .addTo(this._scrollController);

        new ScrollMagic.Scene({duration: "1300"})
            .setTween(TweenMax.to('#A-element', 1, {top: 1200, ease: Linear.easeNone}))
            // .addIndicators()
            .addTo(this._scrollController);

        $('#digital').each(function () {
            new ScrollMagic.Scene({duration: "2500"})
                .setTween([
                    TweenMax.to(this, 1, {top: 2200, ease: Linear.easeNone}),
                ])
                // .addIndicators()
                .addTo(_this._scrollController);
        });

        $('#small-shuttle').each(function () {
            new ScrollMagic.Scene({duration: "2500"})
                .setTween([
                    TweenMax.to(this, 1, {top: ( $(this).offset().top + 2000 ), ease: Linear.easeNone})
                ])
                // .addIndicators()
                .addTo(_this._scrollController);
        });

        new ScrollMagic.Scene({duration: "2500"})
            .setTween(TweenMax.to('#R-element', 1, {top: 2160, ease: Linear.easeNone}))
            // .addIndicators()
            .addTo(this._scrollController);

        $('#carrot').each(function () {
            new ScrollMagic.Scene({duration: "4000", triggerElement: '#clients', offset: -50})
                .setTween(
                    TweenMax.fromTo(this, 1, {top: 400}, {top: ($(this).offset().top + 550), ease: Linear.easeNone})
                )
                // .addIndicators()
                .addTo(_this._scrollController);
        });
        $('#big-shuttle').each(function () {
            new ScrollMagic.Scene({duration: "4500", triggerElement: '#clients', offset: -480})
                .setTween(
                    TweenMax.fromTo(this, 1, {top: -200}, {top: ($(this).offset().top + 100), ease: Linear.easeNone}))
                //.addIndicators()
                .addTo(_this._scrollController);
        });

        $('#cells').each(function () {
            new ScrollMagic.Scene({duration: "4500", triggerElement: '#cells-wrapper', offset: -480})
                .setTween(
                    TweenMax.fromTo(this, 1, {top: 0}, {top: ($(this).offset().top + 1000), ease: Linear.easeNone}))
                //.addIndicators()
                .addTo(_this._scrollController);
        });

        $('#decorate-cases').each(function () {
            new ScrollMagic.Scene({duration: "4500", triggerElement: '#decorate-cases-wrapper', offset: -480})
                .setTween(
                    TweenMax.fromTo(this, 1, {top: 0}, {top: ($(this).offset().top + 300), ease: Linear.easeNone}))
                //.addIndicators()
                .addTo(_this._scrollController);
        });

        $('#carrot-2').each(function () {
            new ScrollMagic.Scene({duration: "4500", triggerElement: '#carrot-wrapper', offset: -480})
                .setTween(
                    TweenMax.fromTo(this, 1, {top: 0}, {top: ($(this).offset().top + 300), ease: Linear.easeNone}))
                //.addIndicators()
                .addTo(_this._scrollController);
        })
    }
}

function closePopup() {
    $.magnificPopup.close();
}

$(function () {
    window.app = new Application();
});