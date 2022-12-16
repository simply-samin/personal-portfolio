@extends('frontend.main_master')
@section('title')
    Project Detatils
@endsection
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">{{ $project->project_name }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $project->project_name }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-details-area -->
        <section class="services__details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="services__details__thumb">
                            <img src=" {{ asset($project->project_image) }} " alt="">
                        </div>
                        <div class="services__details__content">
                            <h2 class="title">{{ $project->project_title }}</h2>
                            <p> {!! $project->project_description !!} </p>


                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-details-area-end -->


        <!-- contact-area -->

        <!-- contact-area-end -->

    </main>
@endsection
