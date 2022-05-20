<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo e(__('Maher Shehadie')); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo e(asset('/img/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <link href="<?php echo e(asset('vendor2/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <!-- Mobiscroll JS and CSS Includes -->
    <link rel="stylesheet" href="<?php echo e(asset('css/mobiscroll.javascript.min.css')); ?>">
    <script src="<?php echo e(asset('js/mobiscroll.javascript.min.js')); ?>"></script>

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

    </style>

    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home-page.home-page')->html();
} elseif ($_instance->childHasBeenRendered('5CPoJKW')) {
    $componentId = $_instance->getRenderedChildComponentId('5CPoJKW');
    $componentTag = $_instance->getRenderedChildComponentTagName('5CPoJKW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5CPoJKW');
} else {
    $response = \Livewire\Livewire::mount('home-page.home-page');
    $html = $response->html();
    $_instance->logRenderedChild('5CPoJKW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
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
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script>
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
    </script>

    <!-- Vendor2 JS Files -->
    <script src="<?php echo e(asset('vendor2/purecounter/purecounter.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor2/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor2/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor2/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor2/typed.js/typed.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor2/php-email-form/validate.js')); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/homepage.blade.php ENDPATH**/ ?>