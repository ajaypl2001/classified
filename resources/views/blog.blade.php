<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/Opulence.png') }}" type="images/favicon-icon.png">
    <title>HOME</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script type="text/javascript" src="{{ asset('js/city_state.js') }}"></script>
</head>

<body>
    <header>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 left_part">
                        <ul>
                            <li><a href="http://localhost/classified/home/about">About Us</a></li>
                            <li><a href="http://localhost/classified/help/pages/safety">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right_part">
                        <ul>
                            <li class="active before_login">
                                <a href="{{ route('login_form') }}"><i class="fa fa-lock" aria-hidden="true"></i>
                                    &nbspLogin</a>
                            </li>
                            <li><a href="{{ route('registerform') }}"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    &nbspRegister</a></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    English&nbsp <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://localhost/classified/languageswitcher/index/english">
                                            <span class="texts">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/classified/languageswitcher/index/amharic">
                                            <span class="texts">Amharic</span>
                                        </a>
                                    </li>
                                </ul>
                            </li id="google_translate_element">

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-inverse custom_navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <ul class="hidden-sm hidden-md hidden-lg mbl_menu">
                        <li class="categry_outr "><a class="categry_link" data-target="#myNavbar"
                                onclick="openNav()"><img src="{{ asset('images/opu-logo.png') }}"></a>
                            <div class="categry_dtl hidden-sm hidden-md hidden-lg" id="navv"
                                style="display: none;">
                                <a class="remove hidden-sm hidden-md hidden-lg" id="remove" onclick="closeNav()"><i
                                        class="fas fa-times" aria-hidden="true"></i></a>
                                <h2 class="hidden-sm hidden-md hidden-lg">CATEGORY</h2>
                                <ul class="ctry_ul">

                                </ul>
                            </div>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="http://localhost/classified/" style=" padding:0; ">
                        <img src="{{ asset('images/Opulence.png') }}">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active categry_outr hidden-xs"><a class="categry_link" data-target="#myNavbar"
                                onclick="openNav()"><img src="{{ asset('images/category.png') }}">&nbspCATEGORY</a>
                            <div class="categry_dtl" id="navv" style="width: 290px; display: none;">

                                <ul class="ctry_ul">
                                    @foreach ($result as $catdata)
                                        <li><a style="cursor: pointer;"><i
                                                    class="{{ $catdata['CateIcon'] }}"aria-hidden="true"></i>{{ $catdata['CateName'] }}</a>
                                            <div class="sub-menu2">
                                                <div class="col-sm-12 sub-menu-inner">
                                                    <ul>
                                                        @foreach ($catdata['subcategories'] as $subcat)
                                                            <li> <a style="cursor: pointer;"
                                                                    href="http://localhost/classified/adslisting/index/1"><i
                                                                        class="fa fa-angle-right"
                                                                        aria-hidden="true"></i>
                                                                    {{ $subcat }}</a></li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ route('blogs')}}"><img
                                    src="{{ asset('images/blog.png') }}">&nbspBLOG</a></li>
                        <li><a href="http://localhost/classified/home/contactus"><img
                                    src="{{ asset('images/contact.png') }}">&nbspCONTACT US</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right hidden-xs">
                        <li><a href="http://localhost/classified/login">Post Free AD!</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="map">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.462328081439!2d76.79937091513085!3d30.705400631646523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecea27086f09%3A0x947c146c0695123!2sElante+Mall!5e0!3m2!1sen!2sin!4v1505890723829" frameborder="0" style="border:0" allowfullscreen></iframe>
   -->
            <div>


                <!-- #region Jssor Slider Begin -->
                <!-- Generator: Jssor Slider Maker -->
                <!-- Source: https://www.jssor.com -->
                <script src="{{ asset('js/jssor.slider-26.5.2.min.js') }}" type="text/javascript"></script>
                <script type="text/javascript">
                    jssor_1_slider_init = function() {

                        var jssor_1_SlideoTransitions = [
                            [{
                                b: -1,
                                d: 1,
                                o: -0.7
                            }],
                            [{
                                b: 900,
                                d: 2000,
                                x: -379,
                                e: {
                                    x: 7
                                }
                            }],
                            [{
                                b: 900,
                                d: 2000,
                                x: -379,
                                e: {
                                    x: 7
                                }
                            }],
                            [{
                                b: -1,
                                d: 1,
                                o: -1,
                                sX: 2,
                                sY: 2
                            }, {
                                b: 0,
                                d: 900,
                                x: -171,
                                y: -341,
                                o: 1,
                                sX: -2,
                                sY: -2,
                                e: {
                                    x: 3,
                                    y: 3,
                                    sX: 3,
                                    sY: 3
                                }
                            }, {
                                b: 900,
                                d: 1600,
                                x: -283,
                                o: -1,
                                e: {
                                    x: 16
                                }
                            }]
                        ];

                        var jssor_1_options = {
                            $AutoPlay: 1,
                            $SlideDuration: 800,
                            $SlideEasing: $Jease$.$OutQuint,
                            $Align: 0,
                            $CaptionSliderOptions: {
                                $Class: $JssorCaptionSlideo$,
                                $Transitions: jssor_1_SlideoTransitions
                            },
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $BulletNavigatorOptions: {
                                $Class: $JssorBulletNavigator$
                            }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        /*#region responsive code begin*/

                        var MAX_WIDTH = 3000;

                        function ScaleSlider() {
                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;

                            if (containerWidth) {

                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                jssor_1_slider.$ScaleWidth(expectedWidth);
                            } else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }

                        ScaleSlider();

                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    };
                </script>
                <style>
                    /* jssor slider loading skin spin css */
                    .jssorl-009-spin img {
                        animation-name: jssorl-009-spin;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-timing-function: linear;
                    }

                    @keyframes jssorl-009-spin {
                        from {
                            transform: rotate(0deg);
                        }

                        to {
                            transform: rotate(360deg);
                        }
                    }


                    .jssorb032 {
                        position: absolute;
                    }

                    .jssorb032 .i {
                        position: absolute;
                        cursor: pointer;
                    }

                    .jssorb032 .i .b {
                        fill: #fff;
                        fill-opacity: 0.7;
                        stroke: #000;
                        stroke-width: 1200;
                        stroke-miterlimit: 10;
                        stroke-opacity: 0.25;
                    }

                    .jssorb032 .i:hover .b {
                        fill: #000;
                        fill-opacity: .6;
                        stroke: #fff;
                        stroke-opacity: .35;
                    }

                    .jssorb032 .iav .b {
                        fill: #000;
                        fill-opacity: 1;
                        stroke: #fff;
                        stroke-opacity: .35;
                    }

                    .jssorb032 .i.idn {
                        opacity: .3;
                    }

                    .jssora051 {
                        display: block;
                        position: absolute;
                        cursor: pointer;
                    }

                    .jssora051 .a {
                        fill: none;
                        stroke: #fff;
                        stroke-width: 360;
                        stroke-miterlimit: 10;
                    }

                    .jssora051:hover {
                        opacity: .8;
                    }

                    .jssora051.jssora051dn {
                        opacity: .5;
                    }

                    .jssora051.jssora051ds {
                        opacity: .3;
                        pointer-events: none;
                    }
                </style>
                <div id="jssor_1"
                    style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin"
                        style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                            src="{{ asset('images/slider/spin.svg') }}" />
                    </div>
                    <div data-u="slides"
                        style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:300px;overflow:hidden;">
                        <div>
                            @foreach ($slider_img as $slider_imgs)
                                    <img data-u="image" src="{{ asset('images/slider/'.$slider_imgs['ImageName']) }}" />
                                    @endforeach
                                </div>
                            
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;"
                        data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    {{-- <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;"
                        data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div> --}}
                    {{-- <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;"
                        data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div> --}}
                </div>
                <script type="text/javascript">
                    jssor_1_slider_init();
                </script>
                <!-- #endregion Jssor Slider End -->

            </div>
        
        </div>
    </header>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <h1>Blogs</h1>
                <div class="projcard-container">
		
                    <div class="projcard projcard-blue">
                        <div class="projcard-innerbox">
                            <img class="projcard-img" src="https://picsum.photos/800/600?image=1041" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Card Title</div>
                                <div class="projcard-subtitle">This explains the card in more detail</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">HTML</span>
                                    <span class="projcard-tag">CSS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="projcard projcard-red">
                        <div class="projcard-innerbox">
                            <img class="projcard-img" src="https://picsum.photos/800/600?image=1080" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">That's Another Card</div>
                                <div class="projcard-subtitle">I don't really think that I need to explain anything here</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">PHP</span>
                                    <span class="projcard-tag">SQL</span>
                                    <span class="projcard-tag">Database</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="projcard projcard-green">
                        <div class="projcard-innerbox">
                            <img class="projcard-img" src="https://picsum.photos/800/600?image=1039" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">And a Third Card</div>
                                <div class="projcard-subtitle">You know what this is by now</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Excel</span>
                                    <span class="projcard-tag">VBA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="projcard projcard-customcolor" style="--projcard-color: #F5AF41;">
                        <div class="projcard-innerbox">
                            <img class="projcard-img" src="https://picsum.photos/800/600?image=943" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Last Card</div>
                                <div class="projcard-subtitle">That's the last one. Have a nice day!</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">iOS</span>
                                    <span class="projcard-tag">Android</span>
                                    <span class="projcard-tag">Cordova</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <script>
        document.querySelectorAll(".projcard-description").forEach(function(box) {
            $clamp(box, {clamp: 6});
        });
    </script>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 left">
                    <h3>Join Our Mailing List</h3>
                    <p>We Promise To Send Only Good Things.</p>
                    <form class="form-inline" id="mailchimpform">
                        <div class="bottom_border">
                            <div class="form-group">
                                <input type="email" class="form-control" name="mailchimpemail" id="mailchimpemail"
                                    placeholder="Enter email address">
                            </div>
                            <button type="submit" id="submit" class="btn btn-default mailchimp"
                                onclick="mailForm()"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                        <label id="mailchimpemail-error" class="error" style="color:red;"
                            for="mailchimpemail"></label>
                        <div id="mailsuccess"></div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6 wd center">
                    <h3>Follow us on Social</h3>
                    <ul>
                        @foreach ($social_icon as $social_icons)
                            <li><a target="_blank" href="{{ $social_icons->SocialiconURL }}"><i
                                        class="{{ $social_icons->SocialiconClass }}" aria-hidden="true"></i></a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6 wd right">
                    <a href="http://localhost/classified/"><img src="{{ asset('images/Opulence.png') }}"
                            width="100%" height="100%"></a>
                </div>
            </div>

            <div class="row bottom_links">
                <ul>
                    <li><a href="http://localhost/classified/home/about">About Us</a></li>
                    <li><a href="http://localhost/classified/member/profile">My Account</a></li>
                    <li><a href="http://localhost/classified/help/pages/safety">Help</a></li>
                    <li><a href="http://localhost/classified/home/termsandconditions">Term & Conditions</a></li>
                    <li><a href="http://localhost/classified/help/pages/postingPolicy">Privacy Policies</a></li>
                </ul>
            </div>
        </div>
        <div class="copy">
            <p>© Copyright 2017<img src="{{ asset('images/Untitled-3dghdg.png')}}"></p>
        </div>
    </footer>
    <script type="text/javascript">
        function mailForm() {

            var mail = document.getElementById('mailchimpemail').value;
            alert(mail);
            $.ajax({
                type: "POST",
                url: "http://localhost/classified/home/mailchimp",
                data: "&mailchimpemail=" + mail,
                dataType: "json",
                success: function(response) {
                    if (response.msg == 'success') {
                        //  alert('ajkdadjajd');
                        $('#mailsuccess').html(
                            '<label id="mailchimpemail-error" class="error" style="color:green;" for="mailchimpemail">Thanks for joining us we will contact with you soon</label>'
                        );
                    } else if (response.msg == 'error') {

                    }
                }
            });

        }
    </script>
    <script>
        var site_lang = '';
        var FACEBOOK_APPID = '1519241515033508';
        var ajax_url = 'http://localhost/classified/';
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.js')}}"></script>
    <script src="{{ asset('js/jquery.validate-1.16.0.min.js')}}"></script>

    <script src="{{ asset('js/validate-custom-en.min.js')}}"></script>

    <script src="{{ asset('js/flexslider.js')}}"></script>
    <script>
        // jQuery(document).ready(function($) {
        //      SyntaxHighlighter.all();
        //    });

        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 100,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
        $('#myCarousel').carousel({
            interval: 10000
        })

        $('.carousel .item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });
    </script>

    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;

        function initMap() {
            map = new google.maps.Map(document.getElementByClassName('map'), {
                center: {
                    lat: -37.8394696,
                    lng: 144.9336287
                },
                zoom: 6
            });
            infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGUpZDsOjNhbb1iG1OUikWqdrUdKpwnT0&callback=initMap"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            var validOptions = get_country_state();
            previousValue = "";

            $('#locations').autocomplete({

                autoFocus: true,
                change: function(event, ui) {
                    //alert(this.value);

                    if (!ui.item) {
                        $("#locations").val("");
                    }
                },
                source: validOptions
            }).keyup(function() {
                var isValid = false;
                for (i in validOptions) {
                    if (validOptions[i].toLowerCase().match(this.value.toLowerCase())) {
                        isValid = true;
                    }
                }
                if (!isValid) {
                    this.value = previousValue
                } else {
                    previousValue = this.value;
                }
            });


        });
    </script>


    <script>
        $(document).ready(function() {
            $('.categry_outr .categry_link').click(function() {
                $(this).parent().toggleClass('open');
                $('.categry_outr .categry_dtl').slideToggle();
            });

            $('.ul_tgl .mob_menu p').click(function() {
                $('ul.nav').slideToggle();
            });
        });

        function openNav() {
            document.getElementById("navv").style.width = "290px";
        }

        function closeNav() {
            document.getElementById("navv").style.width = "0";
        }
    </script>
</body>

</html>