<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('public/styles/assets/images/favicon.png') }}" sizes="35x35" type="image/png">
    <title>Mukammal.uz</title>
    <meta name="description" content="Ilmiy ma'rifiy veb sayt">
    <meta name="keywords" content="mukammal.uz, kitoblar, jurnallar">
    <meta property="og:locale" content="uz">
    <meta property="og:title" content="Mukammal.uz Ilmiy ma'rifiy veb sayt">
    <meta property="og:site_name" content="Mukammal.uz Ilmiy ma'rifiy veb sayt">
    <meta property="og:url" content="https://mukammal.uz/">
    <meta property="og:description" content="Ilmiy ma'rifiy veb sayt">
    <meta property="og:image" content="https://www.mukammal.uz/assets/icon.jpg">
    <meta property="og:image:alt" content="Logo mukammal"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:image:type" content="image/jpg"/>
    <link rel="canonical" href="https://www.mukammal.uz/"/>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.mukammal.uz/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mukammal.uz Ilmiy ma'rifiy veb sayt">
    <meta property="og:description" content="Ilmiy ma'rifiy veb sayt">
    <meta property="og:image" content="https://www.mukammal.uz/assets/icon.jpg">

    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/color.css') }}">
</head>
@yield('style')
<body>
<main>
    <div id="preloader">
        <div class="preloader-inner">
            <i class="preloader-icon thm-clr flaticon-quran"></i>
        </div>
    </div>
    @include('blocks.header')
    @include('blocks.s_menu')
    @include('blocks.m_menu')

@yield('content')

    @include('blocks.footer')


</main>

<style type="text/css">


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
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('public/styles/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/slick.min.js') }}"></script>

<script src="{{ asset('public/styles/assets/js/musicplayer-min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/custom-scripts.js') }}"></script>
<script>
    $(".title_news_").text(function (i, text) {
        if (text.length >= 60) {
            text = text.substring(0, 50);
            var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
            text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
        }
        $(this).text(text);
    });
</script>
<script>
    function downloadfunck(bookid) {
        var bookOIDvalue = bookid;

        $.ajax({
            method: "POST",
            url: "download.php",
            data: {bookOID: bookOIDvalue}
        });
    }
</script>
@yield('script')

