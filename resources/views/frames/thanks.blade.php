<x-section class="thanks" row="thanks_wrapper">
    <div class="thanks_header">
        <h2>благодарности</h2>
    </div>
    <div class="thanks_slider">
        <div class="thanks_slider_box">
            @for ($item = 1; $item <= 4; $item ++)
                <div class="thanks_slider_slide">
                    <img class="thanks_slider_preview" src="{{asset('img/thanks/'.$item.'.jpg')}}" alt="support image"/>
                </div>
            @endfor
        </div>
        <div class="thanks_slider_btn">
            <a class="btn accent" target="_blank" href="https://disk.yandex.ru/d/0SBLue7mpZWhcw">Открыть все</a>
{{--            <button class="thanks_slider_left"></button>--}}
{{--            <button class="thanks_slider_right"></button>--}}
        </div>
    </div>
    <!-- todo:uretral make toggler  https://disk.yandex.ru/d/0SBLue7mpZWhcw -->

</x-section>