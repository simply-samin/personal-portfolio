@extends('frontend.main_master')
@section('title')
    About Page
@endsection
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">About me</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Me</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area -->
        <section class="about about__style__two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img src="{{ $aboutpage->about_image }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">About me</span>
                                <h2 class="title">{{ $aboutpage->title }}</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p><span>{{ $aboutpage->short_title }}</span> </p>
                                </div>
                            </div>
                            <p class="desc">{{ $aboutpage->short_description }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="about__info__wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                        data-bs-target="#about" type="button" role="tab" aria-controls="about"
                                        aria-selected="true">About</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                        type="button" role="tab" aria-controls="skills"
                                        aria-selected="false">Skills</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards"
                                        type="button" role="tab" aria-controls="awards"
                                        aria-selected="false">awards</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                        data-bs-target="#education" type="button" role="tab" aria-controls="education"
                                        aria-selected="false">education</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="about" role="tabpanel"
                                    aria-labelledby="about-tab">
                                    <p class="desc">

                                        {!! $aboutpage->long_description !!}

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                    <div class="about__skill__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Communication</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">70%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Brain Storming</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Resourcefulness</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">50%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Analytical Abilities</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">80%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">User Research</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 55%;"
                                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">55%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                    <div class="about__award__wrap">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__content">
                                                        <h5 class="title">Scholarship</h5>
                                                        <p>Achieved Scholarship for being in top 15% of merit list. - 2019
                                                            Summer, 2020 Spring, 2020 Fall</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__content">
                                                        <h5 class="title">CSE Project Show</h5>
                                                        <p>Achieved 4th place on UIU CSE Project Show. We made a
                                                            automatic water dispenser, Which can measure the cup size
                                                            and dispense water according to the cup's volume</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="education" role="tabpanel"
                                    aria-labelledby="education-tab">
                                    <div class="about__education__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">United Internation University</h3>
                                                    <span class="date">2018 – 2022</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour,There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered
                                                        alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Dhaka Imperial College</h3>
                                                    <span class="date">2015 – 2017</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour,There are many variations of passages of Lorem Ipsum
                                                        available.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Motijheel Model High School and College</h3>
                                                    <span class="date">2010 – 2015</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour,There are many variations of passages of Lorem Ipsum
                                                        available.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

    </main>
@endsection
