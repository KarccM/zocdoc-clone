<link rel="stylesheet" href="/sass/pages/foot.css">

<div class="foot">
    @foreach ($footerData as $section)
        <div>
            <h4>
                {{$section['title']}}
            </h4>
            <ul>
                @foreach ($section['data'] as $item)
                    <li>{!!$item!!}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>