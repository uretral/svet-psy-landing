<x-section class="gallery" row="gallery_wrapper">
    <div class="gallery_header">
        <h2>фотогалерея конгресса</h2>
    </div>
    <div class="gallery_slider">
        <div class="gallery_slider_box">
            @for ($item = 1; $item <= 3; $item ++)
                <div class="gallery_slider_slide">
                    <img class="gallery_slider_preview" src="{{Vite::image('gallery/'.$item.'.png')}}" alt="support image"/>
                </div>
            @endfor
        </div>
        <div class="gallery_slider_btn">
            <button class="gallery_slider_left"></button>
            <button class="gallery_slider_right"></button>
        </div>
    </div>

</x-section>