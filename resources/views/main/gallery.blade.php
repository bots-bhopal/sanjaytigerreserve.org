@extends('layouts.master')

@section('title','- Gallery')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.gallery') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('str.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.gallery') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Work Section -->
    <section id="work" class="padding">
        <div class="container">
            <div class="row container-grid nf-col-3 mb-4">
                @forelse($images as $image)
                    <div class="nf-item branding coffee spacing">
                        <div >
                            <a href="{{ asset('public/storage/gallery/'.$image->filename) }}" target="_blank">
                                <img alt="gallery-image" src="{{ asset('public/storage/gallery/'.$image->filename) }}" class="item-container" height="230">
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center" style="font-weight: 600;">{{ trans('home.gallery-not-found') }}</h2>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Section Start Here -->
            <div class="d-flex justify-content-center">
                {!! $images->links() !!}
            </div>
            <!-- Pagination Section End Here -->
        </div>
    </section>
    <!-- Work Section End -->
@endsection
