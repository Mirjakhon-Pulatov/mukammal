@extends('layout.master')
@section('style')
    <style>
        .to_bottom {
            width: 100%;
            display: flex;
            /*align-items: spa;*/
            flex-direction: column;
            align-items: flex-start;
            height: 100%;
            justify-content: space-between;
        }

        .news_image {
            width: 100%;
            height: 240px;
            background-size: cover;
            background-position: center;
        }

        .hh {
            min-height: 80px;
        }

        .journal_item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #F0F0F0;
            padding: 10px;
            transition: all ease-in-out 0.3s;
        }

        .journal_item:hover {
            transition: all ease-in-out 0.3s;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
        }


        .download_counter {
            font-weight: 700;
            font-size: 19px;
        }

        .download_journal {
            color: green;
            font-weight: 800;
            font-size: 18px;
            /*text-decoration: underline;*/
            transition: all ease-in-out 0.1s;
        }

        .download_journal:hover {
            color: green;
            font-weight: 800;
            font-size: 19px;
            text-decoration: underline;
            transition: all ease-in-out 0.1s;
        }

        .journal_item > h5 > p {
            margin: 0px !important;
            font-size: 18px;
            line-height: 22px;
            padding-bottom: 4px;
        }

        .journal_item h6 {
            font-size: 18px;
            line-height: 20px;
            margin-top: 2px;

        }

        .bottom_line {
            border-bottom: #CACACA solid 1px;
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
                        <h1 class="mb-0">Журнал мақолалари</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Home">Бош саҳифа </a></li>
                            <li class="breadcrumb-item active">Журнал мақолалари</li>
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
                            $maqolas = \Illuminate\Support\Facades\DB::select("SELECT * FROM `journals` order by id");
                        @endphp
                        @foreach($maqolas as $maqola)

                            <div class="col-md-3 mt-4" style="display: flex; justify-content: center;">
                                <div class="journal_item">
                                    @php
                                        $item_id = $maqola->code;
                                        $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('journals', $item_id);
                                    @endphp
                                    <img width="100%" height="335px"
                                         src="{{ asset('public/uploads/gallery/photos/'.$photo) }}">
                                    <h5 class="text-left w-100 bottom_line">
                                        @php
                                            $body = $maqola->body;
                                            $body = html_entity_decode($body);
                                            echo $body;
                                        @endphp
                                    </h5>
                                    <div class='to_bottom'>
                                        <h6 class="text-left"
                                            style="height: 55px; width:100%;">{{ $maqola->title }}</h6>
                                        <h6 style="color:#656565; text-align: left !important; width: 100% !important;">{{ $maqola->author }}</h6>
                                        <p class="w-100"
                                           style="display: flex; justify-content: space-between; margin:0px;">
                                                <span
                                                    class="download_counter"><i style="padding-right: 5px;"
                                                                                class="fa fa-download"></i> <span>{{ $maqola->counterdownload }}</span> </span>
                                            <a class="download_journal" href="{{ $maqola->filejournal }}"
                                               download="" data-journal-id="{{ $maqola->id }}">Юклаб олиш</a></p>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.download_journal').click(function (e) {
                var journalId = $(this).data('journal-id');
                $.ajax({
                    method: "POST",
                    url: "/download-journal",
                    data: {
                        _token: '{{ csrf_token() }}',
                        journalId: journalId
                    }
                });
            });
        });

    </script>
@endsection
