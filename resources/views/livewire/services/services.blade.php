<div>
    <section id="services" class="services-mf route">
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
            {{ $services->links() }}
        </div>
    </section>
</div>
