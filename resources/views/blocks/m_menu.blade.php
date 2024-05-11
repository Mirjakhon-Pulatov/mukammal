<div class="rspn-hdr">
    <!--       <div class="rspn-mdbr">
            <div class="rspn-scil">
              <a href="https://twitter.com/" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
              <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <form class="rspn-srch">
              <input type="text" placeholder="Enter Your Keyword">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div> -->
    <div class="lg-mn">
        <div class="logo">
            <a href="{{ url('/') }}" title="Home"><img src="{{ asset('public/styles/assets/images/main-logo.svg') }}" alt="Logo"></a>
        </div>

        <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            @include('blocks.menu')
        </ul>
    </div>
</div>
