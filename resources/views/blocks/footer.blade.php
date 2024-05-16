<footer>
    <div class="w-100 pt-100 dark-layer pb-50 opc85 position-relative">
        <div class="fixed-bg patern-bg back-blend-multiply dark-bg"
             style="background-image: url({{ asset('public/styles/assets/images/pattern-bg.jpg') }});"></div>
        <div class="container">
            <div class="footer-data w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-4">
                        <div class="widget w-100">
                            <div class="logo">
                                <h1 class="mb-0">
                                    <a href="{{ url('/') }}" title="Home">
                                        <img class="img-fluid"
                                             src="{{ asset('public/styles/assets/images/main-logo-t.svg') }}" alt="Logo"
                                             style="height: 100px; width: 450px;">
                                    </a>
                                </h1>
                            </div>
                            <p class="mb-0">"Шамга ўхшагин, токи ҳаммага равшанлик бағишла, ўзинг эса қоронғуда бўл."
                                <br>
                                <i>- Баҳоуддин Нақшбанд -</i>
                            </p>
                            <br>

                            <!-- START WWW.UZ TOP-RATING -->
                            <SCRIPT language="javascript" type="text/javascript">
                                <!--
                                top_js = "1.0";
                                top_r = "id=45864&r=" + escape(document.referrer) + "&pg=" + escape(window.location.href);
                                document.cookie = "smart_top=1; path=/";
                                top_r += "&c=" + (document.cookie ? "Y" : "N")
                                //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.1" type="text/javascript">
                                <!--
                                top_js = "1.1";
                                top_r += "&j=" + (navigator.javaEnabled() ? "Y" : "N")
                                //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.2" type="text/javascript">
                                <!--
                                top_js = "1.2";
                                top_r += "&wh=" + screen.width + 'x' + screen.height + "&px=" +
                                    (((navigator.appName.substring(0, 3) == "Mic")) ? screen.colorDepth : screen.pixelDepth)
                                //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.3" type="text/javascript">
                                <!--
                                top_js = "1.3";
                                //-->
                            </SCRIPT>
                            <SCRIPT language="JavaScript" type="text/javascript">
                                <!--
                                top_rat = "&col=7DC53B&t=ffffff&p=DD444E";
                                top_r += "&js=" + top_js + "";
                                document.write('<a href="http://www.uz/ru/res/visitor/index?id=45864" target=_top><img src="https://cnt0.www.uz/counter/collect?' + top_r + top_rat + '" width=88 height=31 border=0 alt="Топ рейтинг www.uz"></a>')//-->
                            </SCRIPT>
                            <NOSCRIPT><A href="http://www.uz/ru/res/visitor/index?id=45864" target=_top><IMG height=31
                                                                                                             src="https://cnt0.www.uz/counter/collect?id=45864&pg=http%3A//uzinfocom.uz&&col=7DC53B&amp;t=ffffff&amp;p=DD444E"
                                                                                                             width=88
                                                                                                             border=0
                                                                                                             alt="Топ рейтинг www.uz"></A>
                            </NOSCRIPT><!-- FINISH WWW.UZ TOP-RATING -->

                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-8">
                        <div class="row justify-content-between">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="widget w-100">
                                            <h4 class="widget-title">Фойдали саҳифалар</h4>
                                            <ul class="mb-0 list-unstyled w-100">

                                                @php
                                                    $sites = \Illuminate\Support\Facades\DB::select("SELECT * FROM `pages` ORDER BY visited limit 4");
                                                @endphp

                                                @foreach($sites as $site)
                                                    <li><a href="{{ route('content', ['slug' => $site->slug]) }}" title="">{{ $site->title }}</a></li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="widget w-100">
                                            <h4 class="widget-title">Алоқа учун</h4>
                                            <ul class="cont-info-list2 mb-0 list-unstyled w-100">
                                                <li><i class="thm-clr">Телефон: </i>+998 91 411-77-07</li>
                                                <li><i class="thm-clr">E-mail: </i><span>erkinoov20@gmail.com</span>
                                                </li>
                                                <li><i class="thm-clr">Манзил: </i> И.Каримов кўчаси, Бухоро шаҳри</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom-bar dark-bg2 text-center w-100">
    <p class="mb-0"><a href="{{ url('/') }}" title="Home">Mukammal.uz</a> - Copyright 2024.</p>
</div>
