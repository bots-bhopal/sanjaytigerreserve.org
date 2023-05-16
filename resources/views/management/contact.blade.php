@extends('layouts.master')

@section('title', '- Contact Us')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.btr-management') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('str.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.btr-management') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.contact') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Contact Section -->
    <section class="padding ptb-xs-60">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="heading-box pb-30">
                        <h2>"{{ trans('navbar.title') }}"</h2>
                        <span class="b-line"></span>
                    </div>
                    <p class="lead">
                        {{ trans('contact.title') }}
                    </p><br/>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.5174925101674!2d81.63872501430448!3d24.11845808053436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3985cfc228c018d3%3A0x8fc3947aeb692d07!2sSanjay%20Dubri%20Tiger%20Reserve%20Office!5e0!3m2!1sen!2sin!4v1639647778646!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            {{-- <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Bandhavgarh%20Tiger%20Reserve%20Umaria%20MP.%20-%20484661&key=AIzaSyBoJ7wfOj0UCiNJh4-3YDDEYGqwbNZWs20" allowfullscreen></iframe> --}}
        </div>

        <!--Main Contact Section -->
        <div class="container contact-form text-center pt-80 pt-xs-60 mt-up">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headeing pb-4">
                        <h2>{{ trans('navbar.contact') }}</h2>
                        <span class="b-line"></span>
                    </div>
                    <p>
                        {{ trans('navbar.str') }}
                    </p>
                    <!-- Contact -->
                    <div class="row">
                        <div class="col-sm-12 contact pb-60 pt-30">
                            <div class="row text-center">
                                <div class="col-sm-4 pb-xs-30">
                                    <i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">{{ trans('contact.phone') }}</a>
                                </div>

                                <div class="col-sm-4 pb-xs-30">
                                    <i class="ion-ios-location icon-circle pos-s"></i>
                                    <p  class="mt-15">
                                        {{ trans('contact.add1') }}
                                        <br />
                                        {{ trans('contact.add2') }}
                                    </p>
                                </div>

                                <div class="col-sm-4 pb-xs-30">
                                    <i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:fdsajnp.sdh@mp.gov.in"  class="mt-15 i-block">{{ trans('contact.email1') }}<br/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Contact  -->
                </div>
            </div>
        </div>
    </section>
    <!-- Main Contact Section -->
@endsection
