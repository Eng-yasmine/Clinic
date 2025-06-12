<div>
    {{ $count }}
    <hr>
    {{ $IsActive }}
    <div>
        <button class="form-control" wire:click="increment">+</button>
    </div>
    <div>
        <button class="form-control" wire:click="decrement">-</button>
    </div>
    <div>
        <button class="form-control" wire:click="resetCount">Reset</button>
    </div>
    <button class="form-control" wire:click="toggleActive">Toggle Active</button>
</div>
