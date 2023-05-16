@extends('layouts.master')

@section('title', '- Reserve Profile')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.about') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('str.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.about') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.reserve-profile') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

<!-- Service Section -->
<div id="services-section" class="padding pt-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sx-12">
                <x-about-sidebar />
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.reserve-profile') }}</h2>
                </div>

                <div class="full-pic text-center">
                    <figure>
                        <img src="{{ asset('public/assets/images/str-imgs/str-21.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <br/>
                        <p>{{ trans('about.profile-p-1') }}</b></p>
                        <p><b>{{ trans('about.core-area') }}</b></p>
                        <p><b>{{ trans('about.buffer-area') }}</b></p>
                        <p><b>{{ trans('about.total-area') }}</b></p>
                        <p><b>{{ trans('about.longitude') }}	 23&deg; 48' 24" to 24&deg; 7' 38" {{ trans('about.north') }}</b></p>
                        <p><b>{{ trans('about.latitude') }}	81&deg; 28' 30'' to 82&deg; 14' 38" {{ trans('about.east') }}</b></p>

                        <br/>
                        <p>{{ trans('about.altitude') }}</p>
                        <p>{{ trans('about.rainfall') }}</p>
                        <p>{{ trans('about.max') }} 30&deg;C</p>
                        {{-- <p>{{ trans('about.min') }} {{ trans('about.jan') }}</p> --}}

                        <br/>
                        <p><b>{{ trans('about.seasons') }}</b></p>
                        <p>{{ trans('about.summer') }}<p>
                        <p>{{ trans('about.monsoon') }}</p>
                        <p>{{ trans('about.winter') }}</p>

                        <br/>
                        <p><b>{{ trans('about.core') }}</b></p>
                        <p>{{ trans('about.tala') }}</p>

                        <br/>
                        <p><b>{{ trans('about.buffer') }}</b></p>
                        <p>{{ trans('about.dhamokhar') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
