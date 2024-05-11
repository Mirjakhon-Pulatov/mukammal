@extends('layout.master')
@section('content')
    <section>
        <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
            <div class="fixed-bg"
                 style="background-image: url({{ asset('public/styles/assets/images/page-title-bg.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0">Алоқа</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Home">Бош саҳифа </a></li>
                            <li class="breadcrumb-item active"> Алоқа</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-90 thm-layer opc6 position-relative">
            <div class="fixed-bg patern-bg back-blend-multiply thm-bg"
                 style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></div>
            <div class="container">
                <div class="cont-info-wrap res-row overlap-115 w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="cont-info-box-wrap w-100">
                                <div
                                    class="cont-info-box text-center position-relative w-100 pat-bg white-layer opc8 back-blend-multiply bg-white"
                                    style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});">
                                    <span class="bg-color1"><i class="flaticon-call"></i></span>
                                    <h4 class="mb-0">Телефон рақамлар</h4>
                                    <p class="mb-0" style="color: black">
                                        <a href="tel: +998914117707">+998 (91) 411-77-07</a>
                                    </p>
                                    <p class="mb-0">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="cont-info-box-wrap w-100">
                                <div
                                    class="cont-info-box text-center position-relative w-100 pat-bg white-layer opc8 back-blend-multiply bg-white"
                                    style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});">
                                    <span class="bg-color1"><i class="flaticon-mail"></i></span>
                                    <h4 class="mb-0">Электрон почта</h4>
                                    <p class="mb-0">
                                        <a href="mailto:erkinoov20@gmail.com" style="color: black">
                                            <span>erkinoov20@gmail.com</span>
                                        </a>
                                    </p>
                                    <p class="mb-0">
                                        <a href="#" title="">
                                            <span>&nbsp;</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="cont-info-box-wrap w-100">
                                <div
                                    class="cont-info-box text-center position-relative w-100 pat-bg white-layer opc8 back-blend-multiply bg-white"
                                    style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});">
                                    <span class="bg-color1"><i class="fas fa-map-marker-alt"></i></span>
                                    <h4 class="mb-0">Манзилимиз</h4>
                                    <p class="mb-0" style="color: black"> Бухоро шаҳри <br> 12 И.Каримов кўчаси,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-250 position-relative">
            <!-- Bu yerda iframe karta joylashtiring width=100%, height=400px -->
        </div>
    </section>
@endsection
