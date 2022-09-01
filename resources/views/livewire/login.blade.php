<div>
    login Page
    <div>
        <button wire:click="checkOut">Checkout</button>
        <div wire:loading>
            Processing Payment...
        </div>
    </div>
    {{$data}}
</div>