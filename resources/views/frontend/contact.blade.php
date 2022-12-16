@extends('frontend.main_master')
@section('title')
    Contact Me
@endsection
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Contact Me</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-map -->

        <!-- contact-map-end -->

        <!-- contact-area -->
        <div class="services__details">
            <div class="container">
                <form method="post" action="{{ route('store.message') }}" class="contact__form">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <input name="name" type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <input name="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="col-md-6">
                            <input name="phone" type="text" placeholder="Phone Number">
                        </div>
                    </div>
                    <textarea name="message" id="message" placeholder="Massage"></textarea>
                    <button type="submit" class="btn">send massage</button>
                </form>
            </div>
        </div>
        <!-- contact-area-end -->

        <!-- contact-area -->
        <!-- contact-area-end -->

    </main>
@endsection
