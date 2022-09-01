@php
    $checker = $errors->any() ? 'shit' : '';    
@endphp
<div>
    <form wire:submit.prevent="checkBeforeSend">
        <input wire:model.debounce.500ms="counter"/>
        <input wire:model.debounce.500ms="text" />
        <button type="submit" @disabled($checker)>Submit</button>
    </form>
    {{$checker}}
    {{$counter}}
    {{$text}}
</div>
