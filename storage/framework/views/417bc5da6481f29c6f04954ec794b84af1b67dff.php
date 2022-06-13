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
    <title><?php echo e(__('Services')); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    

    <link href="<?php echo e(asset('vendor2/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <style>
        @import  url("https://fonts.googleapis.com/css?family=Roboto");

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

        @keyframes  come-in {
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post.all-post')->html();
} elseif ($_instance->childHasBeenRendered('Bh6wrKX')) {
    $componentId = $_instance->getRenderedChildComponentId('Bh6wrKX');
    $componentTag = $_instance->getRenderedChildComponentTagName('Bh6wrKX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Bh6wrKX');
} else {
    $response = \Livewire\Livewire::mount('post.all-post');
    $html = $response->html();
    $_instance->logRenderedChild('Bh6wrKX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Post/AllPost.blade.php ENDPATH**/ ?>