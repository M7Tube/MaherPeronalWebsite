<div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            @if (app()->getLocale() == 'ar')
                <h1 class="logo"><a
                        href="{{ route('homepage', app()->getLocale()) }}">{{ $info->ar_peronal_name }}</a></h1>
            @else
                <h1 class="logo"><a
                        href="{{ route('homepage', app()->getLocale()) }}">{{ $info->en_peronal_name }}</a></h1>
            @endif
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{ __('Home') }}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{ __('About') }}</a></li>
                    <li><a class="nav-link scrollto" href="#services">{{ __('Services') }}</a></li>
                    <li><a class="nav-link scrollto " href="#newsletter">{{ __('Email Campaign') }}</a></li>
                    <li><a class="nav-link scrollto " href="#blog">{{ __('Blog') }}</a></li>

                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
                        </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">{{ __('Contact') }}</a></li>
                    @if (app()->getLocale() == 'ar')
                        <li><a class="nav-link scrollto " href="{{ route('homepage', 'en') }}">English<i
                                    class="bi bi-translate"></i></a></li>
                    @else
                        <li><a class="nav-link scrollto " href="{{ route('homepage', 'ar') }}">عربي<i
                                    class="bi bi-translate"></i></a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image"
        style="background-image: url({{ asset('img/' . $info->big_personal_pic) }})">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    @if (app()->getLocale() == 'ar')
                        <h1 class="hero-title mb-4">{{ $info->ar_peronal_name }}</h1>
                    @else
                        <h1 class="hero-title mb-4">{{ $info->en_peronal_name }}</h1>
                    @endif
                    @if (app()->getLocale() == 'ar')
                        <p class="hero-subtitle"><span class="typed"
                                data-typed-items="{{ $info->ar_skills }}"></span></p>
                    @else
                        <p class="hero-subtitle"><span class="typed"
                                data-typed-items="{{ $info->en_skills }}"></span></p>
                    @endif
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
                                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $info->small_personal_pic)) !!}"
                                                    class="img-fluid rounded b-shadow-a" alt="personal picture">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                @if (app()->getLocale() == 'ar')
                                                    <p><span class="title-s">{{ __('Name:') }} </span>
                                                        <span>{{ $info->ar_peronal_name }}</span>
                                                    </p>
                                                @else
                                                    <p><span class="title-s">{{ __('Name:') }} </span>
                                                        <span>{{ $info->en_peronal_name }}</span>
                                                    </p>
                                                @endif
                                                @if (app()->getLocale() == 'ar')
                                                    <p><span class="title-s">{{ __('Profile:') }} </span>
                                                        <span>{{ $info->ar_job_title }}</span>
                                                    </p>
                                                @else
                                                    <p><span class="title-s">{{ __('Profile:') }} </span>
                                                        <span>{{ $info->en_job_title }}</span>
                                                    </p>
                                                @endif
                                                <p><span class="title-s">{{ __('Email:') }} </span>
                                                    <span>{{ $info->email }}</span>
                                                </p>
                                                <p><span class="title-s">{{ __('Phone:') }} </span>
                                                    <span>{{ $info->phone }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s">{{ __('Skill') }}</p>
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
                                                {{ __('About me') }}
                                            </h5>
                                        </div>
                                        @if (app()->getLocale() == 'ar')
                                            <p class="lead">
                                                {{ $info->ar_peronal_desc }} </p>
                                        @else
                                            <p class="lead">
                                                {{ $info->en_peronal_desc }} </p>
                                        @endif
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
                                {{ __('Services') }}
                            </h3>
                            <p class="subtitle-a">
                                {{ __('Services Description **NEED TO BE EDITED') }}
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($services as $service)
                        @if (app()->getLocale() == 'ar')
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-ico">
                                        <span class="ico-circle"><i class="{{ $service->icon }}"></i></span>
                                    </div>
                                    <div class="service-content">
                                        <h2 class="s-title">{{ $service->ar_name }}</h2>
                                        <p class="s-description text-center">
                                            {{ $service->ar_desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-ico">
                                        <span class="ico-circle"><i class="{{ $service->icon }}"></i></span>
                                    </div>
                                    <div class="service-content">
                                        <h2 class="s-title">{{ $service->en_name }}</h2>
                                        <p class="s-description text-center">
                                            {{ $service->en_desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- ======= Counter Section ======= -->
        <div class="section-counter paralax-mf bg-image"
            style="background-image: url({{ asset('img/counters-bg.jpg') }}">
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
                                    data-purecounter-end="{{ $statistics->work_complated }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('WORKS COMPLETED') }}</span>
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
                                    data-purecounter-end="{{ $statistics->years_of_experience }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('YEARS OF EXPERIENCE') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="{{ $statistics->total_clients }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('TOTAL CLIENTS') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-award"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="{{ $statistics->award_won }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('AWARD WON') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Counter Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="items" class="portfolio-mf sect-pt4 route">
            <div class="container">
                {{-- <div class="row">
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
                </div> --}}
                <div class="row">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            {{ __('Items') }}
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                    @forelse ($items as $item)
                        <div class="col-md-4">
                            <div class="work-box">
                                {{-- <a href="{!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"> --}}
                                <div class="work-img">
                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}" alt="Picture"
                                        class="img-fluid">
                                </div>
                                {{-- </a> --}}
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            @if (app()->getLocale() == 'ar')
                                                <h2 class="w-title">{{ $item->ar_name }}</h2>
                                            @else
                                                <h2 class="w-title">{{ $item->en_name }}</h2>
                                            @endif
                                            @if (app()->getLocale() == 'ar')
                                                <div class="w-more">
                                                    <span class="text-center">{{ $item->ar_desc }}</span><br>
                                                    <span class="w-date">{{ $item->created_at }}</span>
                                                </div>
                                            @else
                                                <div class="w-more">
                                                    <span class="text-center">{{ $item->en_desc }}</span><br>
                                                    <span class="w-date">{{ $item->created_at }}</span>
                                                </div>
                                            @endif

                                        </div>
                                        {{-- <div class="col-sm-4">
                                            <div class="w-like">
                                                <a href="portfolio-details.html"> <span
                                                        class="bi bi-plus-circle"></span></a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse
                </div>
            </div>
        </section><!-- End Portfolio Section -->
        <br>
        <hr>
        <section id="newsletter" class="portfolio-mf sect-pt4 route">
            @livewire('newsletter-email')
        </section>
        <br>
        <br>
        <hr>
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                {{ __('Blog') }}
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($posts as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card card-blog">
                                <div class="card-img">
                                    <a href="{{ route('post', ['id' => $post->post_id]) }}"><img
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $post->picture)) !!}" alt="picture"
                                            class="img-fluid"></a>
                                </div>
                                <div class="card-body">
                                    <div class="card-category-box">
                                        <div class="card-category">
                                            <h6 class="category">{{ $post->main_title }}</h6>
                                        </div>
                                    </div>
                                    <h3 class="card-title"><a
                                            href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p class="card-description">
                                        {{ substr($post->body, 0, 100) }}<a href="" class="text-primary">
                                            {{ __('...Read More') }}</a>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="post-author">
                                        <span class="author"><b>{{ $post->user->name }}</b></span>
                                    </div>
                                    <div class="post-date">
                                        <span class="bi bi-clock"></span> {{ $post->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse


                </div>
            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url({{ asset('img/overlay-bg.jpg') }}">
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
                                            @if (app()->getLocale() == 'ar')
                                                <p class="lead">
                                                    {{ $info->ar_contactWithUs_message }}
                                                </p>
                                            @else
                                                <p class="lead">
                                                    {{ $info->en_contactWithUs_message }}
                                                </p>
                                            @endif
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span>
                                                    {{ $info->location }}</li>
                                                <li><span class="bi bi-phone"></span>{{ $info->phone }}</li>
                                                <li><span class="bi bi-envelope"></span>{{ $info->email }}</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="{{ $info->facebook }}"><span class="ico-circle"><i
                                                                class="bi bi-facebook"></i></span></a></li>
                                                <li><a href="{{ $info->instagram }}"><span class="ico-circle"><i
                                                                class="bi bi-instagram"></i></span></a></li>
                                                <li><a href="{{ $info->twitter }}"><span class="ico-circle"><i
                                                                class="bi bi-twitter"></i></span></a></li>
                                                <li><a href="{{ $info->linkedIn }}"><span class="ico-circle"><i
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
