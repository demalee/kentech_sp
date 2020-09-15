<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gaming platform </title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logo/log.png')}}" type="image/x-icon"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/logo/log.png')}}">
    <link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

    <!-- Google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- Template's stylesheets -->
    <link rel="stylesheet" href="{{asset('js/megamenu/stylesheets/screen.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-default.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('js/loaders/stylesheets/screen.css')}}">
    <link rel="stylesheet" href="{{asset('css/corporate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Simple-Line-Icons-Webfont/simple-line-icons.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('fonts/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/revolution-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/revolution-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/revolution-slider/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('js/parallax/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/cubeportfolio/cubeportfolio.min.css')}}">
    <link href="{{asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('js/tabs/css/responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('js/ytplayer/ytplayer.css')}}" />
    <link href="{{asset('js/accordion/css/smk-accordion.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/magnific-popup/magnific-popup.css')}}">
    <link href="{{asset('js/animations/css/animations.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Template's stylesheets END -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Style Customizer's stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/style-customizer/css/spectrum.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/style-customizer/css/style-customizer.css')}}">
    <link rel="stylesheet/less" type="text/css" href="less/skin.html">
{{--    @include('layouts.master')--}}
</head>

<body>
{{--<div class="over-loader loader-live">--}}
{{--    <div class="loader">--}}
{{--        <div class="loader-item style5">--}}
{{--            <div class="bounce1"></div>--}}
{{--            <div class="bounce2"></div>--}}
{{--            <div class="bounce3"></div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}


<div class="wrapper-boxed">
    <div class="site-wrapper">

        @include('layouts.header')

        <main class="py-4">
        <!--end menu-->
        @yield('content')
    </main>
        <div class="clearfix"></div>
    </div></div>
<section class="sec-padding">
    <div class="container">
        <div class="divider-line solid light opacity-1"></div>
        <div class="row">
            <div class="col-md-4 col-sm-12 colmargin clearfix margin-bottom">
                <div class="fo-map">
                    <div class="footer-logo"><img src="{{asset('images/logo/log.png')}}" alt="" style="width: auto; height: 120px;  margin: -10px 13px 10px 10px;"></div>
                </div>
            </div>
            <!--end item-->

            <div class="col-md-4 col-xs-12 clearfix margin-bottom">


                <ul class="footer-quick-links-4 dark">
                    <li><a href="{{url('about')}}"><i class="fa fa-angle-right"></i> About us </a></li>
                    <li><a href="{{url('what')}}"><i class="fa fa-angle-right"></i> Services</a></li>
                    <li><a href="{{url('how')}}"><i class="fa fa-angle-right"></i> How we work</a></li>
                </ul>
            </div>
            <!--end item-->

            <div class="col-md-4 col-sm-12 colmargin clearfix margin-bottom">
                <div class="fo-map">
                    <address>

                        info@gamingplat.com<br>
                        +121111164<br>
                       Mauritius
                    </address>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding-6 section-medium-dark">
    <div class="container">
        <div class="row">
            <div class="fo-copyright-holder text-center" style="color: white">© Copyright Gaming Platform International. All Rights Reserved.

            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- end scroll to top of the page-->

</div>
<!--end site wrapper-->
</div>
<!--end wrapper boxed-->

<!-- Scripts -->
<script src="{{asset('js/jquery/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('js/style-customizer/js/spectrum.js')}}"></script>
<script src="{{asset('js/less/less.min.js')}}" data-env="development"></script>
<script src="{{asset('js/style-customizer/js/style-customizer.js')}}"></script>
<!-- Scripts END -->

<!-- Template scripts -->
<script src="{{asset('js/megamenu/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ytplayer/jquery.mb.YTPlayer.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ytplayer/elementvideo-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ytplayer/play-pause-btn.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript">
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function () {
        if (tpj("#rev_slider").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider");
        } else {
            revapi4 = tpj("#rev_slider").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/revolution-slider/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: false,
                        hide_under: 100,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 80,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 80,
                            v_offset: 0
                        }
                    }
                    ,
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,


                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },

                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [870, 730, 600, 550],
                lazyType: "smart",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                disableProgressBar: "on",
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });	/*ready*/
</script>
<script type="text/javascript">
    var tpj = jQuery;

    var revapi280;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_280_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_280_1");
        } else {
            revapi280 = tpj("#rev_slider_280_1").show().revolution({
                sliderType: "hero",
                jsFileLocation: "../../revolution/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {},
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1000, 1024, 778, 480],
                gridheight: [700, 520, 420, 420],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "spinner2",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "60",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
<script>
    $(window).load(function () {
        setTimeout(function () {

            $('.loader-live').fadeOut();
        }, 1000);
    })

</script>
<script src="{{asset('js/parallax/parallax-background.min.js')}}"></script>
<script>
    (function ($) {
        $('.parallax').parallaxBackground();
    })(jQuery);
</script>
<script src="{{asset('js/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }

        });

        $('.image-popup-fit-width').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            image: {
                verticalFit: false
            }
        });

        $('.image-popup-no-margins').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        });

    });
</script>
<script>
    $(document).ready(function () {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (item) {
                    return item.el.attr('title') + '<small>by Kibet</small>';
                }
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
</script>

<script>
    $(document).ready(function () {

        $('.simple-ajax-popup-align-top').magnificPopup({
            type: 'ajax',
            alignTop: true,
            overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
        });

        $('.simple-ajax-popup').magnificPopup({
            type: 'ajax'
        });

    });
</script>
<script src="{{asset('js/tabs/js/responsive-tabs.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cubeportfolio/main-mosaic3-cols3.js')}}"></script>
<script src="{{asset('js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('js/owl-carousel/custom.js')}}"></script>
<script src="{{asset('js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('js/accordion/js/smk-accordion.js')}}"></script>
<script src="{{asset('js/accordion/js/custom.js')}}"></script>
<script src="{{asset('js/progress-circle/raphael-min.js')}}"></script>
<script src="{{asset('js/progress-circle/custom.js')}}"></script>
<script src="{{asset('js/progress-circle/jQuery.circleProgressBar.js')}}"></script>
<script src="{{asset('js/animations/js/animations.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/animations/js/appear.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/functions/functions.js')}}"></script>
</body>

</html>
