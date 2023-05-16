@extends('layouts.master')

@section('title', '- Forest Type')

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
                            {{ trans('navbar.forest-type') }}
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
                    <h2>{{ trans('navbar.forest-type') }}</h2>
                </div>

                <div class="full-pic text-center">
                    <figure>
                        <img src="{{ asset('public/assets/images/str-imgs/str-4.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('about.forest-p1') }}</p>
                        <ul>
                            <li class="mb-3">{{ trans('about.forest-p1-l1') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p1-l2') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p1-l3') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p1-l4') }}</li>
                        </ul>
                        <p>{{ trans('about.forest-p2') }}</p>
                        <ul>
                            <li class="mb-3">{{ trans('about.forest-p2-l1') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p2-l2') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p2-l3') }}</li>
                        </ul>
                        <p>{{ trans('about.forest-p3') }}</p>
                        <p>{{ trans('about.forest-p4') }}</p>
                        <p>{{ trans('about.forest-p5') }}</p>
                        <p>{{ trans('about.forest-p6') }}</p>
                        <ul>
                            <li class="mb-3">{{ trans('about.forest-p6-l1') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p6-l2') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p6-l3') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p6-l4') }}</li>
                        </ul>
                        <p><b>{{ trans('about.forest-p7') }}</b></p>
                        <p>{{ trans('about.forest-p8') }}</p>
                        <p><b>{{ trans('about.forest-p9') }}</b></p>
                        <ul>
                            <li class="mb-3">{{ trans('about.forest-p9-l1') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p9-l2') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p9-l3') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p9-l4') }}</li>
                            <li class="mb-3">{{ trans('about.forest-p9-l5') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
