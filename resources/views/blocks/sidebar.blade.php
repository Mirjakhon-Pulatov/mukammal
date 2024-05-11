<aside class="sidebar w-100">
    <div class="widget2 w-100">
        <h3 class="widget-title2">Сўнгги янгиликлар</h3>
        <div class="mini-posts-wrap w-100">

            @php

                $news = \Illuminate\Support\Facades\DB::select("SELECT * FROM `news` ORDER BY id LIMIT 5");
            @endphp
            @foreach($news as $new)
                @php
                    $item_id = $new->code;
                    $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('news', $item_id);
                @endphp
                <div class="mini-post-box d-flex flex-wrap w-100">
                    <a href="{{ route('news.view', ['slug' => $new->slug]) }}"><img class="img-fluid w-100"
                                                                                    src="{{ asset('public/uploads/gallery/photos/'. $photo) }}"
                                                                                    alt="Mini Post Image 1"></a>
                    <div class="mini-post-info">
                        <span
                            class="d-block thm-clr">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $new->sanasi)->format('  d.m.Y ') }}</span>
                        <h4 class="mb-0 "><a class="sarlavha" href="{{ route('news.view', ['slug' => $new->slug]) }}"
                                            title="">{{ $new->title }}</a></h4>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</aside>

