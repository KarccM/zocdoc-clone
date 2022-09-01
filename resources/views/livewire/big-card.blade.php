<div>
    @if($show)
        <div class="big-card">
            <div class="big-card-img">
                <img src={{$imgsrc}} alt={{$name}}>
            </div>
            <div class="big-card-details">
                <h1 class="big-card-h1">{{$name}}</h1>
                <div>{{$description}}</div>
            </div>
        </div>
    @endif
</div>
