<!DOCTYPE html>

<?php if(app()->getLocale() == 'ar'): ?>
    <html lang="ar" dir="rtl">
<?php else: ?>
    <html lang="en" dir="ltr">
<?php endif; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/maherLogo.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/maherLogo.png')); ?>">
    <title><?php echo e(__('Maher Shehadie')); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    

    <link href="<?php echo e(asset('vendor2/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <!-- Mobiscroll JS and CSS Includes -->
    

    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home-page.home-page')->html();
} elseif ($_instance->childHasBeenRendered('IyouNsx')) {
    $componentId = $_instance->getRenderedChildComponentId('IyouNsx');
    $componentTag = $_instance->getRenderedChildComponentTagName('IyouNsx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IyouNsx');
} else {
    $response = \Livewire\Livewire::mount('home-page.home-page');
    $html = $response->html();
    $_instance->logRenderedChild('IyouNsx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/HomePage/homepage.blade.php ENDPATH**/ ?>