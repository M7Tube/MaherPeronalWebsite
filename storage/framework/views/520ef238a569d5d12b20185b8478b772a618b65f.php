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
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">DevFolio</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="<?php echo e(asset('/img/logo.png')); ?>" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#work">Work</a></li>
                    <li><a class="nav-link scrollto " href="#blog">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post.post')->html();
} elseif ($_instance->childHasBeenRendered('dcIO2R2')) {
    $componentId = $_instance->getRenderedChildComponentId('dcIO2R2');
    $componentTag = $_instance->getRenderedChildComponentTagName('dcIO2R2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dcIO2R2');
} else {
    $response = \Livewire\Livewire::mount('post.post');
    $html = $response->html();
    $_instance->logRenderedChild('dcIO2R2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Post/post.blade.php ENDPATH**/ ?>