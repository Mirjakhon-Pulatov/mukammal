@extends('layout.master')
@section('style')
    <style>
        .img_gallery{
            width: 100%;
            height: 220px;
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection
@section('content')
    <section>
        <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
            <div class="fixed-bg"
                 style="background-image: url({{ asset('public/styles/assets/images/page-title-bg.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0">ФОТОГАЛEРEЯ</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Home">БОШ САҲИФА</a></li>
                            <li class="breadcrumb-item active">ФОТОГАЛEРEЯ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-250 position-relative">
            <div class="container">
                <div class="gallery-wrap w-100">
                    <div class="row">

                        @php
                            $galleries = \Illuminate\Support\Facades\DB::select("SELECT `id`,`file` FROM `gallerys` WHERE album_id = '2' ORDER BY id");
                        @endphp

                        @foreach($galleries as $gallery)
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="gallery-box text-center overflow-hidden position-relative w-100">
                                    <div class="img_gallery"
                                         style="background-image: url({{ asset('public/uploads/gallery/thumbnails/'. $gallery->file) }});">
                                    </div>

                                    <div class="gallery-info position-absolute">
                                        <a class="d-inline-block thm-clr"
                                           href="{{ asset('public/uploads/gallery/photos/'. $gallery->file)}}"
                                           data-fancybox="gallery"
                                           title="">
                                            <i class="flaticon-view"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
