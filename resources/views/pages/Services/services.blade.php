<!DOCTYPE html>

@if (app()->getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/maherLogo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/maherLogo.png') }}">
    <title>{{ __('Services') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto");

        @-webkit-keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }

        @keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }

        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            /* font-family: 'Roboto', sans-serif; */
        }

        .floating-container {
            position: fixed;
            width: 100px;
            height: 100px;
            bottom: 0;
            right: 0;
            margin: 35px 25px;
        }

        .floating-container:hover {
            height: 300px;
        }

        .floating-container:hover .floating-button {
            box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
            -webkit-transform: translatey(5px);
            transform: translatey(5px);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .floating-container:hover .element-container .float-element:nth-child(1) {
            -webkit-animation: come-in 0.4s forwards 0.2s;
            animation: come-in 0.4s forwards 0.2s;
        }

        .floating-container:hover .element-container .float-element:nth-child(2) {
            -webkit-animation: come-in 0.4s forwards 0.4s;
            animation: come-in 0.4s forwards 0.4s;
        }

        .floating-container:hover .element-container .float-element:nth-child(3) {
            -webkit-animation: come-in 0.4s forwards 0.6s;
            animation: come-in 0.4s forwards 0.6s;
        }

        .floating-container .floating-button {
            position: absolute;
            width: 65px;
            height: 65px;
            background: #2cb3f0;
            bottom: 0;
            border-radius: 50%;
            left: 0;
            right: 0;
            margin: auto;
            color: white;
            line-height: 65px;
            text-align: center;
            font-size: 23px;
            z-index: 100;
            box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
            cursor: pointer;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .floating-container .float-element {
            position: relative;
            display: block;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin: 15px auto;
            color: white;
            font-weight: 500;
            text-align: center;
            line-height: 50px;
            z-index: 0;
            opacity: 0;
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
        }

        .floating-container .float-element .material-icons {
            vertical-align: middle;
            font-size: 16px;
        }

        .floating-container .float-element:nth-child(1) {
            background: #42A5F5;
            box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
        }

        .floating-container .float-element:nth-child(2) {
            background: #4CAF50;
            box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
        }

        .floating-container .float-element:nth-child(3) {
            background: #FF9800;
            box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
        }
    </style>
    <!-- Mobiscroll JS and CSS Includes -->
    {{-- <link rel="stylesheet" href="{{ asset('css/mobiscroll.javascript.min.css') }}">
    <script src="{{ asset('js/mobiscroll.javascript.min.js') }}"></script>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        body,
        html {
            height: 100%;
        }

        .md-calendar-booking .mbsc-calendar-text {
            text-align: center;
        }

        .md-calendar-booking .booking-datetime .mbsc-datepicker-tab-calendar {
            flex: 1 1 0;
            min-width: 300px;
        }

        .md-calendar-booking .mbsc-timegrid-item {
            margin-top: 1.5em;
            margin-bottom: 1.5em;
        }

        .md-calendar-booking .mbsc-timegrid-container {
            top: 30px;
        }

    </style> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @livewireStyles
</head>

<body>

    @livewire('services.services')
    <div class="floating-container">
        <div class="floating-button"><i class="bi bi-person-lines-fill"></i></div>
        <div class="element-container">
            <a href="https://api.whatsapp.com/send?phone=963936869890" target="blank"> <span
                    class="float-element tooltip-left">
                    <i class="bi bi-whatsapp"></i>
                </span></a>
            <a href="https://www.facebook.com/Mahershehadie" target="blank"> <span class="float-element tooltip-left">
                    <i class="bi bi-facebook"></i>
                </span></a>
            <a href="https://www.instagram.com/maher_shehadie/" target="blank"> <span class="float-element tooltip-left">
                    <i class="bi bi-instagram"></i>
                </span></a>
        </div>
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor2 JS Files -->
    <script src="{{ asset('vendor2/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor2/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('vendor2/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
