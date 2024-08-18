<x-section class="support" row="support_wrapper">
    <div class="support_header">
        <h2>КОНГРЕСС проводится<span>при поддержке и участии</span></h2>

    </div>
    <div class="support_body">
        @for ($item = 1; $item <= 10; $item ++)
            <img class="support_logos_{{$item}}" src="{{Vite::image('support/'.$item.'.png')}}" alt="support image"/>
        @endfor
    </div>
    <div class="support_footer">
        <button class="btn accent">СТАТЬ ПАРТНЕРОМ</button>
    </div>
</x-section>