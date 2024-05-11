@extends('layout.master')
@section('style')
    <style>
        .news_image {
            width: 100%;
            height: 240px;
            background-size: cover;
            background-position: center;
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
                        <h1 class="mb-0">Янгиликлар</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Home">Бош саҳифа </a></li>
                            <li class="breadcrumb-item active">Янгиликлар</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="w-100 pt-120 pb-280 position-relative">

            <div class="container">
                <div class="blog-wrap w-100">
                    <div class="row">
                        @php
                            $news = \App\Models\News::all();
                        @endphp
                        @foreach($news as $new)

                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="post-box w-100">
                                    <div class="post-img overflow-hidden position-relative w-100">
                                        <a href="{{ route('news.view', ['slug' => $new->slug]) }}">
                                            @php
                                                $item_id = $new->code;
                                                $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('news', $item_id);
                                            @endphp
                                            <div class="news_image"
                                                 style="background-image: url({{ asset('public/uploads/gallery/photos/'. $photo) }});">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="post-info position-relative w-100">
                                        <span class="post-date thm-clr">

                                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $new->sanasi)->format('  d.m.Y ') }}

                                        </span>
                                        <h3 class="mb-0 sarlavha"><a
                                                href="{{ route('news.view', ['slug' => $new->slug]) }}"
                                                title="">{{ $new->title }}</a></h3>
                                        <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                            <li><i class="fas fa-eye"></i> {{$new->visited}} ko'rilgan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
                <!--           <div class="pagination-wrap mt-20 d-flex flex-wrap justify-content-center text-center w-100">
                    <ul class="pagination mb-0">
                      <li class="page-item prev"><a class="page-link" href="javascript:void(0);" title=""><i class="fas fa-long-arrow-alt-left"></i></a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">1</a></li>
                      <li class="page-item active"><a class="page-link" href="javascript:void(0);" title="">2</a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">3</a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">4</a></li>
                      <li class="page-item pg-rang">...........</li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">24</a></li>
                      <li class="page-item next"><a class="page-link" href="javascript:void(0);" title=""><i class="fas fa-long-arrow-alt-right"></i></a></li>
                    </ul>
                  </div> -->
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(".sarlavha").text(function (t, s) {
            if (s.length >= 30) {
                var n = (s = s.substring(0, 50)).lastIndexOf(" ");
                s = s.substring(0, n) + "..."
            }
            $(this).text(s)
        });
    </script>
@endsection
