@extends('frontend.main_master')
@section('title')
    Portfolio
@endsection
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">My Portfolio</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-area -->
        <section class="portfolio__inner">
            <div class="container">

                <div class="portfolio__inner__active">

                    @foreach ($portfolio as $item)
                        <div class="portfolio__inner__item grid-item cat-two cat-three">
                            <div class="row gx-0 align-items-center">
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__thumb">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset($item->portfolio_image) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__content">
                                        <h2 class="title"><a
                                                href="{{ route('portfolio.details', $item->id) }}">{{ $item->portfolio_title }}</a>
                                        </h2>
                                        <p>{!! Str::limit($item->portfolio_description, 200) !!} </p>
                                        <a href="{{ route('portfolio.details', $item->id) }}" class="link">View Case
                                            Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>
        </section>
        <!-- portfolio-area-end -->

    </main>
@endsection
