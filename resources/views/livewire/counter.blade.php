<!-- resources/views/livewire/counter.blade.php -->

<div style="text-align: center; margin-top: 50px;">
    <button wire:click="decrement">-</button>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>
