@extends('layout.master')
@section('style')
    <style>
        .img_book_div {
            width: 540px;
            height: 540px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img_book_div img {
            transform: scale(0.5);
        }

        @media only screen and (max-width: 600px) {
            .img_book_div {
                width: 100%;
                height: auto;
                background-image: inherit;
            }

            .img_book_div img {
                transform: scale(1.0) !important;
            }
        }

        .slick-dots {
            display: none !important;
        }
    </style>
@endsection
@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="feat-wrap v1 text-center position-relative w-100">
                <div class="feat-caro">

                    <div class="feat-item">
                        <div class="feat-img position-absolute"
                             style="background-image: url({{ asset('public/styles/assets/images/home_section_1.jpg') }});">
                        </div>
                        <div class="feat-cap-wrap position-absolute d-inline-block">
                            <div class="feat-cap d-inline-block">
                                <h2 class="mb-0 main_sit">"Шамга ўхшагин, токи ҳаммага равшанлик бағишла, ўзинг эса
                                    қоронғуда бўл."</h2>
                                <p class="mb-0 main_sit_author">- Баҳоуддин Нақшбанд -</p>

                            </div>
                        </div>
                    </div>

                    <div class="feat-item">
                        <div class="feat-img position-absolute"
                             style="background-image: url({{ asset('public/styles/assets/images/home_section_2.jpg') }});">
                        </div>
                        <div class="feat-cap-wrap position-absolute d-inline-block">
                            <div class="feat-cap d-inline-block">
                                <h2 class="mb-0 main_sit">"Шамга ўхшагин, токи ҳаммага равшанлик бағишла, ўзинг эса
                                    қоронғуда бўл."</h2>
                                <p class="mb-0 main_sit_author">- Баҳоуддин Нақшбанд -</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>


        <div class="w-100 pt-5 pb-235 position-relative">
            <img class="img-fluid sec-top-mckp position-absolute"
                 src="{{ asset('public/styles/assets/images/sec-top-mckp2.png') }}"
                 alt="Sec Top Mockup 2">
            <div class="container">

                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <h2 class="text-center pb-5">Мазкур сайтда Баҳоуддин Нақшбанд томонидан асосланган
                                жаҳоншумул "Нақшбандия" тариқати ва таълимотининг
                                комил инсонни тарбиялашда аҳамиятли бўлган
                                ўгитлар ва тавсиялар таҳлил қилинган
                                ҳамда ёритилган</h2>
                        </div>

                        <h2 class="mb-0">Сўнгги янгиликлар</h2>
                        <p class="mb-0">Сўнгги янгиликлар рукни билан танишинг</p>
                    </div>
                </div>
                <div class="blog-wrap res-row w-100">
                    <div class="row">
                        @php $news = \Illuminate\Support\Facades\DB::select("SELECT * FROM `news` order by id limit 3") @endphp

                        @foreach($news as $new)
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="post-box w-100">
                                    <div class="post-img overflow-hidden position-relative w-100">
                                        @php
                                            $item_id = $new->code;
                                            $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('news', $item_id);
                                        @endphp
                                        <a href="{{ route('news.view', ['slug' => $new->slug])  }}" title="">
                                            <div class="news_image"
                                                 style="background-image: url({{ asset('public/uploads/gallery/photos/'. $photo) }});">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-info position-relative w-100">
                                        <a class="thm-bg" href="{{ route('news.view', ['slug' => $new->slug]) }}"
                                           title=""><i
                                                class="fas fa-pen"></i></a>
                                        <span
                                            class="post-date thm-clr">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $new->sanasi)->format('  d.m.Y ') }}</span>
                                        <h3 class="hh mb-0"><a class="title_news_"
                                                               href="{{ route('news.view', ['slug' => $new->slug]) }}"
                                                               title="">{{ $new->title }}</a></h3>
                                        <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                            <li><i class="fas fa-eye"></i><?php echo $new->visited ?> ko'rilgan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                        <style type="text/css">
                            .news_image {
                                width: 100%;
                                height: 240px;
                                background-size: cover;
                                background-position: center;
                            }

                            .hh {
                                min-height: 120px;
                            }
                        </style>

                    </div>
                </div>
                <div class="view-more d-inline-block text-center w-100">
                    <a class="thm-btn mini-btn thm-bg" href="news" title="">Барча
                        янгиликлар<span></span><span></span><span></span><span></span></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-90 gray-layer opc85 position-relative">
            <div class="fixed-bg patern-bg back-blend-multiply gray-bg"
                 style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></div>
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <h2 class="mb-0">Илмий-маърифий китоблар</h2>
                    </div>
                </div>
                <div class="prod-wrap overlap-150 prod-caro w-100">

                    @php $books = \Illuminate\Support\Facades\DB::select("SELECT * FROM `books` ORDER BY tegyear desc limit 3") @endphp

                    @foreach($books as $book)
                        <div class="prod-box d-block w-100">
                            <div class="row mrg">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="prod-img overflow-hidden position-relative w-100">
                                        @php
                                            $item_id = $book->code;
                                            $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('books', $item_id);
                                        @endphp
                                        <div class="img_book_div" style="">
                                            <img class="img-fluid"
                                                 src="{{ asset('public/uploads/gallery/photos/'. $photo) }}"
                                                 alt="Product Image 1"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="prod-info w-100">


                                        <h3 class="mb-0"><a href="#" title="">{{ $book->name }}</a></h3>
                                        <br>

                                        <p>{{ $book->subtext }}</p>
                                        <span style="margin: 20px auto;"
                                              class="prod-publish d-block">{{ $book->teg }}<span
                                                class="thm-clr"> - {{ $book->tegyear }}</span></span>
                                        <p></p>
                                        <p class="counters">
                                            &nbsp;
                                            <i class="fa fa-download" aria-hidden="true"></i> <span
                                                class="year"> {{ $book->yuklangan }} </span>
                                        </p>

                                        <a class="download_journal" href="{{ $book->filebook }}" download="" title=""
                                           data-journal-id="{{ $book->id }}">Юклаб олиш</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="w-100 pt-100 pb-210 position-relative" style="margin-top: 150px;">
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <a style="margin-bottom: 30px; bottom: 60px;" class="thm-btn mini-btn thm-bg"
                           href="{{ url('all-books') }}"
                           title="">Барча
                            китоблар<span></span><span></span><span></span><span></span></a>
                        <h2 class="mb-0">Муаллиф ҳақида қисқача маълумот</h2>
                    </div>
                </div>

                @php $authors = \Illuminate\Support\Facades\DB::select("SELECT * FROM `about_author` where id = '1' ") @endphp

                @foreach($authors as $author)
                    <div class="row">
                        <div class="col-md-6">
                            @php
                                $item_id = $author->code;
                                $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('about_author', $item_id);
                            @endphp
                            <a href="{{ route('author.view', ['slug' => $author->slug]) }}" title=""><img
                                    style="transform: scale(0.63);" class="img-fluid w-100"
                                    src="{{ asset('public/uploads/gallery/photos/'. $photo) }}"
                                    alt="Author Image"></a>
                        </div>
                        <div class="col-md-6 justify-content-center align-items-center">
                            <div class="post-info2">
                                <h3 class="mb-0"><a href="{{ route('author.view', ['slug' => $author->slug]) }}"
                                                    title="">НАВРЎЗОВА ГУЛЧЕҲРА НЕЪМАТОВНА</a></h3>

                                @php
                                    $body = $author->short_text;
                                    $body = html_entity_decode($body);
                                    echo $body;
                                @endphp
                                <a class="thm-btn thm-bg" href="{{ route('author.view', ['slug' => $author->slug]) }}"
                                   title="">Батафсил
                                    маълумот<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 black-layer pb-70 opc7 position-relative">
            <div class="fixed-bg"
                 style="background-image: url({{ asset('public/styles/assets/images/image.jfif') }});"></div>
            <div class="container">
                <div class="sec-title v2 text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <h1 class="mb-0">Бухоронинг "Етти Пири"</h1>
                    </div>
                </div>
                <div class="pillars-wrap w-100">
                    <ul
                        class="pillars-list text-center d-flex flex-wrap justify-content-center align-items-center mb-0 list-unstyled">
                        <li>
                            <div class="pillar-box position-relative w-100">
                  <span class="d-inline-block thm-clr position-relative"><span
                          class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                          style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></span><i
                          class="flaticon-quran"></i></span>
                                <h3 class="mb-0">Абдулхолиқ Ғиждувоний</h3>
                                <a href="{{ route('content', ['slug' => 'abdulholiq-gizhduvonij']) }}">
                                    <i class="d-block thm-clr" style="margin-top: 10px;">Батафсил</i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="pillar-box position-relative w-100">
                  <span class="d-inline-block thm-clr position-relative"><span
                          class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                          style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></span><i
                          class="flaticon-quran"></i></span>
                                <h3 class="mb-0">Ориф <br> Ревгарий</h3>
                                <a href="{{ route('content', ['slug' => 'orif-revgarij']) }}">
                                    <i class="d-block thm-clr" style="margin-top: 10px;">Батафсил</i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="pillar-box position-relative w-100">
                  <span class="d-inline-block thm-clr position-relative"><span
                          class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                          style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></span><i
                          class="flaticon-quran"></i></span>
                                <h3 class="mb-0">Махмуд Анжир Фағнавийiy</h3>
                                <a href="{{ route('content', ['slug' => 'mahmud-anzhir-fagnavij']) }}">
                                    <i class="d-block thm-clr" style="margin-top: 10px;">Батафсил</i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="pillar-box position-relative w-100">
                  <span class="d-inline-block thm-clr position-relative"><span
                          class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                          style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></span><i
                          class="flaticon-quran"></i></span>
                                <h3 class="mb-0">Хўжа Али Ромитаний</h3>
                                <a href="{{ route('content', ['slug' => 'huzha-ali-romitanij']) }}">
                                    <i class="d-block thm-clr" style="margin-top: 10px;">Батафсил</i>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul
                        class="pillars-list text-center d-flex flex-wrap justify-content-center align-items-center mb-0 list-unstyled">
                        <li>
                            <div class="pillar-box position-relative w-100">
                  <span class="d-inline-block thm-clr position-relative"><span
                          class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                          style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></span><i
                          class="flaticon-quran"></i></span>
                                <h3 class="mb-0">Муҳаммад Бобои Самосий</h3>
                                <a href="{{ route('content', ['slug' => 'muhammad-boboi-samosij']) }}">
                                    <i class="d-block thm-clr" style="margin-top: 10px;">Батафсил</i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="pillar-box position-relative w-100">
                  <span class="d-inline-block thm-clr position-relative"><span
                          class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                          style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></span><i
                          class="flaticon-quran"></i></span>
                                <h3 class="mb-0">Саййид Мир Кулол</h3>
                                <a href="{{ route('content', ['slug'=> 'sajjid-mir-kulol']) }}">
                                    <i class="d-block thm-clr" style="margin-top: 10px;">Батафсил</i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="pillar-box position-relative w-100">
                  <span class="d-inline-block thm-clr position-relative"><span
                          class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                          style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></span><i
                          class="flaticon-quran"></i></span>
                                <h3 class="mb-0">Баҳоуддин Нақшбанд</h3>
                                <a href="{{ route('content', ['slug' => 'bahouddin-naqshband']) }}">
                                    <i class="d-block thm-clr" style="margin-top: 10px;">Батафсил</i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-90 gray-layer pb-90 opc85 position-relative">
            <div class="fixed-bg patern-bg back-blend-multiply gray-bg"
                 style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></div>
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <h2 class="mb-0">Видео галерея</h2>
                    </div>
                </div>
                <div class="camp-wrap w-100">
                    <div class="camp-box w-100">
                        <div class="row mrg align-items-center">
                            <div class="col-md-12 col-sm-12 col-lg-7 order-lg-1">
                                <div class="camp-img position-relative w-100">
                                    <img class="img-fluid w-100"
                                         src="{{ asset('public/styles/assets/images/home_section_1.jpg') }}"
                                         alt="Campaign Image 1">
                                    <a class="thm-bg spinner position-absolute"
                                       href="https://www.youtube.com/embed/GNqZaPM5NeU"
                                       data-fancybox="" title=""><i class="flaticon-play"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-5" style="margin-top: -20px;">
                                <div
                                    class="camp-info pat-bg thm-layer opc8 position-relative back-blend-multiply thm-bg"
                                    style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});">
                                    <h3 class="mb-0">Видео лавҳаларимиз билан танишинг</h3>
                                    <!--   <p class="mb-0">Lorem ipsum dolor sit amet, coteudtu adipi sicing elit, sed do eiusmod tempor
                                        incididu dntut labore et.</p> -->
                                    <div class="goal"></div>
                                    <a class="thm-btn bg-black" href="videogallery" style="margin-top: 55px;">Барча
                                        видео лавҳалар<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.download_journal').click(function (e) {
                var bookId = $(this).data('journal-id');
                $.ajax({
                    method: "POST",
                    url: "/download-book",
                    data: {
                        _token: '{{ csrf_token() }}',
                        bookId: bookId,
                    }
                });
            });
        });
    </script>
@endsection
