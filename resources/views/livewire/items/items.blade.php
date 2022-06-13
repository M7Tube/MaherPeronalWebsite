<div>
    <section id="items" class="portfolio-mf  route">
        <div class="container mb-5">
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
                        <a href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                            style="text-decoration: none;">
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
                        </a>
                    </div>
                @empty
                    <h4 class="text-center">{{ __('Empty') }}</h4>
                @endforelse
            </div>
            {{ $items->links() }}
        </div>
    </section><!-- End Portfolio Section -->
</div>
