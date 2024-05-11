<header class="stick style1">
    <div class="topbar bg-color1 d-flex flex-wrap justify-content-center" style="right: -310px;">
        <div class="social-links d-inline-flex">
            <ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
                <li><a href="#">O'zbekcha (Lotin)</a></li>
                <li><a href="#">Ўзбекча (Кирилча)</a></li>
                <li><a href="#">Русский</a></li>
            </ul>
        </div>
    </div>
    <div class="logo-menu-wrap d-flex flex-wrap justify-content-between w-100">
        <div class="logo position-relative thm-layer opc7 back-blend-multiply thm-bg"
             style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});">
            <h1 class="mb-0"><a href="{{ url('/') }}" title="Home"><img class="img-fluid" src="{{ asset('public/styles/assets/images/main-logo-t.svg') }}"
                                                               alt="Logo"></a></h1>
        </div>
        <nav class="d-flex flex-wrap align-items-center justify-content-center">
            <div class="header-left">
                <ul class="mb-0 list-unstyled d-inline-flex">
                    @include('blocks.menu')
                </ul>
            </div>
            <div class="header-right">
                <a class="thm-btn thm-bg" href="{{ url('/contact') }}"
                   title="">Боғланиш<span></span><span></span><span></span><span></span></a>
            </div>
        </nav>
    </div>
</header>
