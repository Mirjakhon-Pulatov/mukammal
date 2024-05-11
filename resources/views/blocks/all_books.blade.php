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
                        <h1 class="mb-0">БАРЧА КИТОБЛАР</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Home">Бош саҳифа</a></li>
                            <li class="breadcrumb-item active">Китоблар</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-280 position-relative">
            <div class="container">
                <div class="prod-wrap d-inline-block w-100">

                    @php
                        $books = \Illuminate\Support\Facades\DB::select("SELECT * FROM `books` ORDER BY tegyear desc");
                    @endphp

                    @foreach($books as $book)
                        <div class="prod-box d-block w-100">
                            <div class="row mrg">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="prod-img overflow-hidden position-relative w-100">

                                        <div class="img_book_div" style="">
                                            @php
                                                $item_id = $book->code;
                                                $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('books', $item_id);
                                            @endphp
                                            <img style="" class="img-fluid"
                                                 src="{{ asset('public/uploads/gallery/photos/'.$photo) }}"
                                                 alt="Product Image 1">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="prod-info w-100">


                                        <h3 class="mb-0"><a title="">{{ $book->name }}</a></h3>
                                        <br>
                                        {{ $book->subtext }}
                                        <br>
                                        <p></p>
                                        <span style="margin: 20px auto;"
                                              class="prod-publish d-block">{{ $book->teg }}<span
                                                class="thm-clr">- {{ $book->tegyear }}</span></span>
                                        <p></p>
                                        <p class="counters">
                                            &nbsp;
                                            <i class="fa fa-download" aria-hidden="true"></i> <span
                                                class="year"> {{ $book->yuklangan }} </span>
                                        </p>
                                        <a class="download_journal" download="" data-journal-id="{{ $book->id }}"
                                           href="{{ $book->filebook }}" title="">Юклаб олиш</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
