<div class="sticky-menu">
    <div class="container">
        <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="logo">
                <h1 class="mb-0">
                    <a href="{{ url('/') }}" title="Home">
                        <img class="img-fluid" src="{{ asset('public/styles/assets/images/main-logo.svg') }}" alt="Logo"
                             style="height: 65px;">
                    </a>
                </h1>
            </div>
            <nav class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="header-left">
                    <ul class="mb-0 list-unstyled d-inline-flex">
                        @include('blocks.menu')
                    </ul>
                </div>
                <div class="header-right" style="margin-left: 24px;">
                    <a class="thm-btn bg-color1" href="{{ url('contact') }}" title="">
                        Боғланиш<span></span><span></span><span></span><span></span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
