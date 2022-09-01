@php
    use App\Helpers\ApiCalls;
    $collection = [1,2,3];
    $response = ApiCalls::getInstance()->fetchData('GET', 'https://valorant-api.com/v1/agents/dade69b4-4f5a-8528-247b-219e5a1facd6');
    $data = $response;
@endphp

<div>
    <div class="home-page">
        <div class="titles">
            <h1>Riot Games presents VALORANT</h1>
            <h3>a 5v5 character-based tactical FPS</h3>
        </div>
        <div class="cards-container">
            @isset($response)
                @foreach ($collection as $item)
                    @livewire('card',['agent'=>$data])
                @endforeach
            @endisset
        </div>
    </div>
    <div>
        @livewire('big-card')
    </div>
</div>
