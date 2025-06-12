<div>
    {{-- name : {{ $name3}} --}}
    {{-- <input type="text" class="form-control" wire:model.debounce.500ms="name3"> --}}
    {{-- <input type="text" class="form-control" wire:model.lazy="name3"> --}}
    {{-- <input type="text" class="form-control" wire:model.defer="name3">
    <button wire:click="search">Search</button> --}}
    {{ $this->doctorsList }}
</div>
