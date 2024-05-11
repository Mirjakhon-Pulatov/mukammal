@extends('layout.master')
@section('style')
@endsection
@section('content')
    <section>
        <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
            <div class="fixed-bg"
                 style="background-image: url({{ asset('public/styles/assets/images/page-title-bg.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0">Муаллиф ҳақида</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-260 position-relative">
            <div class="container">
                <div class="post-detail-wrap w-100">
                    @foreach($authors as $author)

                    @endforeach
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-9">
                            <div class="post-detail-inner w-100">

                                <div class="post-detail-info   w-100">
                                    <div class="row mt-4">
                                        <div class="col-md-8 d-flex justify-content-center align-items-center">
                                            <h4 class="mb-5">НАВРЎЗОВА ГУЛЧЕҲРА НЕЪМАТОВНА</h4>
                                        </div>
                                        <div class="col-md-4">
                                            @php
                                                $item_id = $authors->code;
                                                $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('about_author', $item_id);
                                            @endphp
                                            <img class="mt-3" src="{{ asset('public/uploads/gallery/photos/'. $photo) }}">
                                        </div>
                                    </div>
                                    <br>
                                    @php
                                        $body = $authors->bodyy;
                                        $body = html_entity_decode($body);
                                        echo $body;
                                    @endphp
                                </div>
                                <div class="share-tags-wrap d-flex flex-wrap w-100">
                                    <div class="share-links d-inline-flex">
                                        <span class="d-inline-block">БОШҚАЛАР БИЛАН УЛАШИНГ:</span>
                                        <div class="social-links4 v2 text-center d-inline-flex">
                                            <a href="https://www.telegram.org/" title="Tumblr" target="_blank"><i
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
                        <div class="col-md-6 pt-80 col-sm-6 col-lg-3">
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
