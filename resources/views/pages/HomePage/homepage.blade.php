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
    <title>{{ __('Maher Shehadie') }}</title>
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

    @livewire('home-page.home-page')
    <div class="floating-container">
        <div class="floating-button"><i class="bi bi-person-lines-fill"></i></div>
        <div class="element-container">
            <a href="https://api.whatsapp.com/send?phone=963936869890" target="blank"> <span
                    class="float-element tooltip-left">
                    <i class="bi bi-whatsapp"></i>
                </span></a>
            <a href="https://www.facebook.com/Mahershehadie" target="blank"> <span
                    class="float-element tooltip-left">
                    <i class="bi bi-facebook"></i>
                </span></a>
            <a href="https://www.instagram.com/maher_shehadie/" target="blank"> <span
                    class="float-element tooltip-left">
                    <i class="bi bi-instagram"></i>
                </span></a>
        </div>
    </div>
    <!-- ======= Footer ======= -->
    <footer>
        {{-- <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    {{-- <script>
        mobiscroll.setOptions({
            locale: mobiscroll
                .localeAr, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
            theme: 'ios', // Specify theme like: theme: 'ios' or omit setting to use default
            themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-themeVariant
        });

        var min = '2022-05-20T00:00';
        var max = '2022-11-20T00:00';



        mobiscroll.datepicker('#demo-booking-datetime', {
            display: 'inline', // Specify display mode like: display: 'bottom' or omit setting to use default
            controls: ['calendar',
                'timegrid'
            ], // More info about controls: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-controls
            min: min, // More info about min: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-min
            max: max, // More info about max: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-max
            minTime: '08:00',
            maxTime: '20:00',
            stepMinute: 720,
            width: null, // More info about width: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-width
            onPageLoading: function(event,
                inst
            ) { // More info about onPageLoading: https://docs.mobiscroll.com/5-16-1/javascript/calendar#event-onPageLoading
                getDatetimes(event.firstDay, function callback(bookings) {
                    inst.setOptions({
                        labels: bookings
                            .labels, // More info about labels: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-labels
                        invalid: bookings
                            .invalid // More info about invalid: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-invalid
                    });
                });
            }
        });

        function getDatetimes(day, callback) {
            var invalid = [];
            var labels = [];

            mobiscroll.util.http.getJson('https://trial.mobiscroll.com/getbookingtime/?year=' + day.getFullYear() +
                '&month=' + day.getMonth(),
                function(bookings) {
                    for (var i = 0; i < bookings.length; ++i) {
                        var booking = bookings[i];
                        var bDate = new Date(booking.d);

                        if (booking.nr > 0) {
                            labels.push({
                                start: bDate,
                                title: booking.nr + ' SPOTS',
                                textColor: '#e1528f'
                            });
                            $.merge(invalid, booking.invalid);
                        } else {
                            invalid.push(bDate);
                        }
                    }
                    callback({
                        labels: labels,
                        invalid: invalid
                    });
                }, 'jsonp');
        }
    </script> --}}

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
