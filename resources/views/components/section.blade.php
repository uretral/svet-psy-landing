<section @isset($class) class="{{$class}}" id="{{$class}}"  @endisset>
    <div @isset($wrapper) {{$wrapper}} @endisset>
        <div @isset($row) class="{{$row}}" @endisset>
            {{$slot}}
        </div>
    </div>
</section>