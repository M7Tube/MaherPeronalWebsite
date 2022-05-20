<div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <?php if(app()->getLocale() == 'ar'): ?>
                <h1 class="logo"><a href="<?php echo e(route('homepage')); ?>"><?php echo e($info->ar_peronal_name); ?></a></h1>
            <?php else: ?>
                <h1 class="logo"><a href="<?php echo e(route('homepage')); ?>"><?php echo e($info->en_peronal_name); ?></a></h1>
            <?php endif; ?>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero"><?php echo e(__('Home')); ?></a></li>
                    <li><a class="nav-link scrollto" href="#about"><?php echo e(__('About')); ?></a></li>
                    <li><a class="nav-link scrollto" href="#services"><?php echo e(__('Services')); ?></a></li>
                    <li><a class="nav-link scrollto " href="#work"><?php echo e(__('Work')); ?></a></li>
                    <li><a class="nav-link scrollto " href="#blog"><?php echo e(__('Blog')); ?></a></li>
                    
                    <li><a class="nav-link scrollto" href="#contact"><?php echo e(__('Contact')); ?></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(<?php echo e(asset('img/hero-bg.jpg')); ?>">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <h1 class="hero-title mb-4"><?php echo e($info->ar_peronal_name); ?></h1>
                    <?php else: ?>
                        <h1 class="hero-title mb-4"><?php echo e($info->en_peronal_name); ?></h1>
                    <?php endif; ?>
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <p class="hero-subtitle"><span class="typed"
                                data-typed-items="<?php echo e($info->ar_skills); ?>"></span></p>
                    <?php else: ?>
                        <p class="hero-subtitle"><span class="typed"
                                data-typed-items="<?php echo e($info->en_skills); ?>"></span></p>
                    <?php endif; ?>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="<?php echo e(asset('img/testimonial-2.jpg')); ?>"
                                                    class="img-fluid rounded b-shadow-a" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <?php if(app()->getLocale() == 'ar'): ?>
                                                    <p><span class="title-s"><?php echo e(__('Name:')); ?> </span>
                                                        <span><?php echo e($info->ar_peronal_name); ?></span>
                                                    </p>
                                                <?php else: ?>
                                                    <p><span class="title-s"><?php echo e(__('Name:')); ?> </span>
                                                        <span><?php echo e($info->en_peronal_name); ?></span>
                                                    </p>
                                                <?php endif; ?>
                                                <?php if(app()->getLocale() == 'ar'): ?>
                                                    <p><span class="title-s"><?php echo e(__('Profile:')); ?> </span>
                                                        <span><?php echo e($info->ar_job_title); ?></span>
                                                    </p>
                                                <?php else: ?>
                                                    <p><span class="title-s"><?php echo e(__('Profile:')); ?> </span>
                                                        <span><?php echo e($info->en_job_title); ?></span>
                                                    </p>
                                                <?php endif; ?>
                                                <p><span class="title-s"><?php echo e(__('Email:')); ?> </span>
                                                    <span><?php echo e($info->email); ?></span>
                                                </p>
                                                <p><span class="title-s"><?php echo e(__('Phone:')); ?> </span>
                                                    <span><?php echo e($info->phone); ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s"><?php echo e(__('Skill')); ?></p>
                                        <span>HTML</span> <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>CSS3</span> <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>PHP</span> <span class="pull-right">50%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                <?php echo e(__('About me')); ?>

                                            </h5>
                                        </div>
                                        <?php if(app()->getLocale() == 'ar'): ?>
                                            <p class="lead">
                                                <?php echo e($info->ar_peronal_desc); ?> </p>
                                        <?php else: ?>
                                            <p class="lead">
                                                <?php echo e($info->en_peronal_desc); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                <?php echo e(__('Services')); ?>

                            </h3>
                            <p class="subtitle-a">
                                <?php echo e(__('Services Description **NEED TO BE EDITED')); ?>

                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if(app()->getLocale() == 'ar'): ?>
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-ico">
                                        <span class="ico-circle"><i class="<?php echo e($service->icon); ?>"></i></span>
                                    </div>
                                    <div class="service-content">
                                        <h2 class="s-title"><?php echo e($service->ar_name); ?></h2>
                                        <p class="s-description text-center">
                                            <?php echo e($service->ar_desc); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-ico">
                                        <span class="ico-circle"><i class="<?php echo e($service->icon); ?>"></i></span>
                                    </div>
                                    <div class="service-content">
                                        <h2 class="s-title"><?php echo e($service->en_name); ?></h2>
                                        <p class="s-description text-center">
                                            <?php echo e($service->en_desc); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h4 class="text-center"><?php echo e(__('Empty')); ?></h4>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- ======= Counter Section ======= -->
        <div class="section-counter paralax-mf bg-image"
            style="background-image: url(<?php echo e(asset('img/counters-bg.jpg')); ?>">
            <div class="overlay-mf"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-check"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0"
                                    data-purecounter-end="<?php echo e($statistics->work_complated); ?>"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text"><?php echo e(__('WORKS COMPLETED')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0"
                                    data-purecounter-end="<?php echo e($statistics->years_of_experience); ?>"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text"><?php echo e(__('YEARS OF EXPERIENCE')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="<?php echo e($statistics->total_clients); ?>"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text"><?php echo e(__('TOTAL CLIENTS')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-award"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="<?php echo e($statistics->award_won); ?>"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text"><?php echo e(__('AWARD WON')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Counter Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Make apppointment
                            </h3>
                            <div class="col-md-8">

                                <div mbsc-page class="demo-appointment-booking">
                                    <div style="height:100%">
                                        <div class="md-calendar-booking">
                                            <div class="mbsc-form-group">
                                                <div class="mbsc-form-group-title">Select date & time</div>
                                                <div id="demo-booking-datetime" class="booking-datetime"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <div class="testimonials paralax-mf bg-image"
            style="background-image: url(<?php echo e(asset('img/overlay-bg.jpg')); ?>">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="author-test">
                                            <img src="<?php echo e(asset('img/testimonial-2.jpg')); ?>" alt=""
                                                class="rounded-circle b-shadow-a">
                                            <span class="author">Xavi Alonso</span>
                                        </div>
                                        <div class="content-test">
                                            <p class="description lead">
                                                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="author-test">
                                            <img src="<?php echo e(asset('img/testimonial-4.jpg')); ?>" alt=""
                                                class="rounded-circle b-shadow-a">
                                            <span class="author">Marta Socrate</span>
                                        </div>
                                        <div class="content-test">
                                            <p class="description lead">
                                                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">

            </div> -->
                    </div>
                </div>
            </div>
        </div><!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                <?php echo e(__('Blog')); ?>

                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="<?php echo e(asset('img/post-1.jpg')); ?>" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Travel</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a>
                                </h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="<?php echo e(asset('img/testimonial-2.jpg')); ?>" alt=""
                                            class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="<?php echo e(asset('img/post-2.jpg')); ?>" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a>
                                </h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="<?php echo e(asset('img/testimonial-2.jpg')); ?>" alt=""
                                            class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="<?php echo e(asset('img/post-3.jpg')); ?>" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a>
                                </h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="<?php echo e(asset('img/testimonial-2.jpg')); ?>" alt=""
                                            class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url(<?php echo e(asset('img/overlay-bg.jpg')); ?>">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Send Message Us
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="forms/contact.php" method="post" role="form"
                                                class="php-email-form">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" placeholder="Your Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Your Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center my-3">
                                                        <div class="loading">Loading</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Your message has been sent. Thank
                                                            you!</div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit"
                                                            class="button button-a button-big button-rouded">Send
                                                            Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Get in Touch
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <?php if(app()->getLocale() == 'ar'): ?>
                                                <p class="lead">
                                                    <?php echo e($info->ar_contactWithUs_message); ?>

                                                </p>
                                            <?php else: ?>
                                                <p class="lead">
                                                    <?php echo e($info->en_contactWithUs_message); ?>

                                                </p>
                                            <?php endif; ?>
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span>
                                                    <?php echo e($info->location); ?></li>
                                                <li><span class="bi bi-phone"></span><?php echo e($info->phone); ?></li>
                                                <li><span class="bi bi-envelope"></span><?php echo e($info->email); ?></li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="<?php echo e($info->facebook); ?>"><span class="ico-circle"><i
                                                                class="bi bi-facebook"></i></span></a></li>
                                                <li><a href="<?php echo e($info->instagram); ?>"><span class="ico-circle"><i
                                                                class="bi bi-instagram"></i></span></a></li>
                                                <li><a href="<?php echo e($info->twitter); ?>"><span class="ico-circle"><i
                                                                class="bi bi-twitter"></i></span></a></li>
                                                <li><a href="<?php echo e($info->linkedIn); ?>"><span class="ico-circle"><i
                                                                class="bi bi-linkedin"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/home-page/home-page.blade.php ENDPATH**/ ?>