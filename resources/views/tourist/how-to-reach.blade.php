@extends('layouts.master')

@section('title', '- How to Reach')

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
                            {{ trans('navbar.how-to-reach') }}
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
                    <h2>{{ trans('navbar.how-to-reach') }}</h2>
                </div>

                <div class="full-pic text-center">
                    <figure>
                        <img src="{{ asset('public/assets/images/str-imgs/How-to-Reach.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <ul>
                            <li class="mb-3">{{ trans('tourist.reach-l1') }}</li>
                            <li class="mb-3">{{ trans('tourist.reach-l2') }}</li>
                            <li class="mb-3">{{ trans('tourist.reach-l3') }}</li>
                            <li class="mb-3">{{ trans('tourist.reach-l4') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/str-map-1.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
