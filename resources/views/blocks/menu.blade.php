@php
    $menus = \Illuminate\Support\Facades\DB::select("SELECT * FROM `menus` where `parent_id` = 0 ORDER BY `index` ");
@endphp


@foreach($menus as $menu)
    @php
        $check_child = \Illuminate\Support\Facades\DB::select("SELECT * FROM `menus` WHERE `parent_id` = $menu->id");
        $class_child = '';
        if (count($check_child)>0)
        {
            $class_child = 'class=menu-item-has-children ';
        }else{
            $class_child = '';
        }
    @endphp
    <li {{ $class_child }}>
        <a href="{{ $menu->link }}">{{ $menu->title }}</a>
        @if(count($check_child)>0)
            <ul class="mb-0 list-unstyled">
                @foreach($check_child as $child)
                    @php
                        $slugs = \Illuminate\Support\Facades\DB::select("Select * from `pages` where `parent` = $child->id ");
                    @endphp

                    @if($slugs)
                        @php
                            $link = $slugs[0]->slug;
                        @endphp

                        <li>
                            <a href="{{ route('content', ['slug' => $link]) }}">{{ $child->title }}</a>
                        </li>
                    @else

                        @php
                            $check_3 = \Illuminate\Support\Facades\DB::select("SELECT * FROM `menus` WHERE `parent_id` = $child->id");
                            $has_childre_class = "";
                            if (count($check_3) > 0){
                                $has_childre_class = 'class=\'menu-item-has-children\'';
                            }else{
                                $has_childre_class = '';
                            }

                        @endphp

                        <li <?= $has_childre_class ?>>
                            <a href="/{{$child->link}}">{{ $child->title }}</a>


                            @if(count($check_3) > 0)
                                <ul class='mb-0 list-unstyled'>

                                    @foreach($check_3 as $ch_3)
                                        <li>
                                            <a href='{{$ch_3->link}}'>{{ $ch_3->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif


                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
    </li>

    {{--    <ul class="mb-0 list-unstyled">--}}
    {{--    </ul>--}}
@endforeach
