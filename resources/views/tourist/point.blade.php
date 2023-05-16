@extends('layouts.master')

@section('title', '- Point of Interests')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.tourist-information') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('str.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.point') }}
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
                <x-tourist-sidebar />
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.point') }}</h2>
                </div>

                <div class="full-pic text-center">
                    <figure>
                        <img src="{{ asset('public/assets/images/str-imgs/Points-of-Interest.jpg') }}" width="100%" height="600px" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.point-p1') }}</p>
                        <ul>
                            <li class="pb-2">{{ trans('tourist.point-l1') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l2') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l3') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l4') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l5') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l6') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l7') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l8') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l9') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l10') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l11') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l12') }}</li>
                            <li class="pb-2">{{ trans('tourist.point-l13') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
