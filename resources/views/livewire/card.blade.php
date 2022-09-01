<div  class="card-container">
    <div class="up-section">
        <div class="img-container"><img class="card-img" src={{$imgsrc}} alt={{$name}}></div>
        <div class="recommended">
            <span class="material-symbols-outlined">
                star
            </span>
            High recommended
        </div>
    </div>
    <div>
        <div class="name">{{$name}}</div>
        <div class="role">{{$role}}</div>
        <div class="dev">{{$developerName}}</div>
    </div>
    <div class="desc">
        {{$description}}
        <button wire:click="cardSelected">View Details</button>
    </div>
</div>