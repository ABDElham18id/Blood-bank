<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
          integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- custom CSS -->
    <link rel="icon" href="{{asset('front/imgs/Icon.png')}}">
    <link rel="stylesheet" href="{{asset('front/css/mycss.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel=stylesheet href="{{asset('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- custom font -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <title>بنك الدم الرئيسية </title>
</head>
<body>
<!-- top nav section -->
<section id="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="lang">
                    <span><a href="{{url('/')}}" id="arabic">عربى</a></span>
                    <span><a href="{{asset('front/index-ltr.html')}}" id="en">EN</a></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-media">
                    <a href="{{ $settings->fb_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $settings->insta_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $settings->tw_link }}" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $settings->whatup_link }}" target="_blank"><i class="fab fa-whatsapp"></i></a>


                </div>

            </div>
            <div class="col-md-4">
                <div class="contact">

                    <p class="email"> {{ $settings->email }}</p>

                    <i class="fas fa-envelope-square email "></i>
                    <p class="phone "> {{ $settings->phone }}
                    </p>
                    <i class="fas fa-phone-volume phone hvr-buzz"></i>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- oradaniry nav section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="nav-logo " href="{{ url('/') }}"><img class="logo" src="{{ asset ('front/imgs/logo.png' )}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                <a class="nav-link " href="{{ url('/') }}">الرئيسية </a>
                <span class="test"></span>


            </li>
            <li class="nav-item">
                <a class="nav-link border-left" href="{{ url('/about') }}">عن بنك الدم </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-left" href="{{ url('/article') }}">المقالات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-left" href="{{ url('/donations') }}">طلبات التبرع</a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-left" href="{{ url('/about') }}">من نحن</a>

            </li>
            <li class="nav-item">
                <a class="nav-link border-left" href="{{ url('/contact') }}">اتصل بنا </a>
            </li>
        </ul>
        <span class="navbar-text">
           <a class="new-account" href="{{ url('/register') }}">انشاء حــساب جديد</a>
           <a href="{{ url('/login') }}"><button class="btn login-btn shadow">دخول</button></a>
          </span>
    </div>
</nav>


{{--  Start Content --}}
@yield('content')
{{-- End Content --}}

<!--  FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="footer-logo" src="{{asset('front/imgs/logo.png')}}">
                <p class="footer-text">بنك الدم هذا النص هو مثال لنص يمكن ان يستبدل فى نفس المساحه, لقد تم توليد هذا
                    النص من مولد النص العربى حيث يمكنك توليد مثل هذا النص أو العديد من النصوص الاخرى إضافة الى زيادة عدد
                    الحروف التى يولدها التطبيق يطلع على صوره حقيقية للتصميم</p>
            </div>
            <div class="col-md-4">
                <ul class="footer-list">
                    <a href="{{ url('/') }}">
                        <li> الرئيسيه</li>
                    </a>
                    <a href="{{ url('/about') }}">
                        <li> عن بنك الدم</li>
                    </a>
                    <a href="{{ url('/article') }}">
                        <li> المقالات</li>
                    </a>
                    <a href="{{ url('/donations') }}">
                        <li> طلبات التبرع</li>
                    </a>
                    <a href="{{ url('/about') }}">
                        <li> من نحن</li>
                    </a>
                    <a href="{{ url('/contact') }}">
                        <li> اتصل بنا</li>
                    </a>

                </ul>
            </div>
            <div class="col-md-4 change-position">
                <p class="footer-subtext">مـتــوفر علي </p>
                <img class="footer-android" src="{{asset('front/imgs/google1.png')}}">
                <img class="footer-ios" src="{{asset('front/imgs/ios1.png')}}">

            </div>

        </div>
    </div>

</footer>
<section id="last-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="social-media">
                    <a href="{{ $settings->fb_link }}" target="_blank"><i class="fab fa-facebook-f hvr-float"></i></a>
                    <a href="{{ $settings->insta_link }}" target="_blank"><i class="fab fa-instagram hvr-float"></i></a>
                    <a href="{{ $settings->tw_link }}" target="_blank"><i class="fab fa-twitter hvr-float"></i></a>
                    <a href="{{ $settings->whatup_link }}" target="_blank"><i class="fab fa-whatsapp hvr-float"></i></a>

                </div>

            </div>
            <div class="col-md-8">
                <p class="copys"> جميع الحقوق محفوظ ل <span id="website-name"> بنك الدم  </span> &copy;2024
                </p>

            </div>

        </div>
        <p class="myname">Made with <i class="fas fa-heart"></i> by Abdelhamid Ibrahim</p>
    </div>


</section>

<!-- loader  -->
<section class="overlay">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop = {
        setting: {
            startline: 100,
            scrollto: 0,
            scrollduration: 1e3,
            fadeduration: [500, 100]
        },
        controlHTML: '<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow92.png" />',
        controlattrs: {offsetx: 5, offsety: 5},
        anchorkeyword: "#top",
        state: {isvisible: !1, shouldvisible: !1},
        scrollup: function () {
            this.cssfixedsupport || this.$control.css({opacity: 0});
            var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
            t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top : 0, this.$body.animate({scrollTop: t}, this.setting.scrollduration)
        },
        keepfixed: function () {
            var t = jQuery(window), o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
                s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
            this.$control.css({left: o + "px", top: s + "px"})
        },
        togglecontrol: function () {
            var t = jQuery(window).scrollTop();
            this.cssfixedsupport || this.keepfixed(), this.state.shouldvisible = t >= this.setting.startline ? !0 : !1, this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({opacity: 1}, this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({opacity: 0}, this.setting.fadeduration[1]), this.state.isvisible = !1)
        },
        init: function () {
            jQuery(document).ready(function (t) {
                var o = scrolltotop, s = document.all;
                o.cssfixedsupport = !s || s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest, o.$body = t(window.opera ? "CSS1Compat" == document.compatMode ? "html" : "body" : "html,body"), o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>").css({
                    position: o.cssfixedsupport ? "fixed" : "absolute",
                    bottom: o.controlattrs.offsety,
                    right: o.controlattrs.offsetx,
                    opacity: 0,
                    cursor: "pointer"
                }).attr({title: "Scroll to Top"}).click(function () {
                    return o.scrollup(), !1
                }).appendTo("body"), document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({width: o.$control.width()}), o.togglecontrol(), t('a[href="' + o.anchorkeyword + '"]').click(function () {
                    return o.scrollup(), !1
                }), t(window).bind("scroll resize", function (t) {
                    o.togglecontrol()
                })
            })
        }
    };
    scrolltotop.init();</script>


<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
@stack('scripts')
</body>
</html>
