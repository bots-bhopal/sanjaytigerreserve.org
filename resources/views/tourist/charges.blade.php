@extends('layouts.master')

@section('title', '- Charges')

@push('css')
    <style>
        table.table-bordered{
            border:1px solid #000;
            margin-top:20px;
        }

        table.table-bordered > thead > tr > th{
            border:1px solid #000;
        }

        table.table-bordered > tbody > tr > th{
            border:1px solid #000;
        }

        table.table-bordered > tbody > tr > td{
            border:1px solid #000;
        }
    </style>
@endpush

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
                            {{ trans('navbar.excursion') }}
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
                    <h2>{{ trans('navbar.excursion') }}</h2>
                </div>

                <div class="full-pic text-center">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image41.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.charges-p1') }}</p>
                        <p>{{ trans('tourist.charges-p2') }}</p>
                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l1') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l2') }}</p>
                            </li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l3') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l4') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l5') }}</p>
                            </li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l6') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l7') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l8') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l9') }}</b></li>
                            <figure>
                                <img src="{{ asset('public/assets/images/team/2.jpg') }}" alt="">
                            </figure>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
