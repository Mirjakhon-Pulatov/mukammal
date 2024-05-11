@extends('layout.master')
@section('style')
    <style>
        .post-detail-img {
            margin-bottom: 1.1rem !important;
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
                        <h1 class="mb-0">{{ $news->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-260 position-relative" style="padding-top: 30px !important;">
            <div class="container">
                <div class="post-detail-wrap w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-9">
                            <div class="post-detail-inner w-100">
                                <div class="post-detail-img w-100">
                                    @php
                                        $item_id = $news->code;
                                        $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('news', $item_id);
                                        $get_visited = \Illuminate\Support\Facades\DB::select("Select visited from `news` where code = '$item_id' ");
                                        $current_visited = $get_visited[0]->visited;
                                        $visited_udpate = $current_visited + 1;
                                      \Illuminate\Support\Facades\DB::select("UPDATE `news` SET `visited` = '$visited_udpate' WHERE `news`.`code` = '$item_id'");
                                    @endphp


                                    <img class="img-fluid w-100"
                                         src="{{ asset('/public/uploads/gallery/photos/'. $photo) }}">


                                </div>
                                <div class="post-detail-info  w-100">
                                    @php
                                        $body = $news->body;
                                        $body = html_entity_decode($body);
                                        echo $body;
                                    @endphp
                                </div>
                                <div class="share-tags-wrap d-flex flex-wrap w-100">
                                    <div class="share-links d-inline-flex">
                                        <span class="d-inline-block">БОШҚАЛАР БИЛАН УЛАШИНГ:</span>
                                        <div class="social-links4 v2 text-center d-inline-flex">
                                            <a href="https://www.tumblr.com/" title="Tumblr" target="_blank"><i
                                                    class="fab fa-telegram"></i></a>
                                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">

                            @include('blocks.sidebar')

                        </div>
                    </div>
                </div>
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
