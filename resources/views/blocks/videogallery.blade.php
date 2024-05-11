@extends('layout.master')
@section('style')
    <style>

        .vidoItem iframe {
            width: 100%;
            height: 300px;
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
                        <h1 class="mb-0">ВИДЕО ГАЛЕРЕЯ</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Home">БОШ САҲИФА</a></li>
                            <li class="breadcrumb-item active">ВИДЕО ГАЛЕРЕЯ</li>
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
                            $videos = \Illuminate\Support\Facades\DB::select("SELECT * FROM `videos` order by position");
                        @endphp

                        @foreach($videos as $video)
                            <div class="col-md-6">
                                <div class="vidoItem">
                                    <iframe src="{{ $video->link }}" title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
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
