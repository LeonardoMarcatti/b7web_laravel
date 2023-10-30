<div>
    <h1 wire:mouseenter="red" wire:mouseleave="black" style="background-color: green; width: auto; color: {{$color}}; ">Valor: {{ $count }}</h1>
    <h2>Hook: {{$hook}}</h2>
    <button type="button" wire:click="increment" class="btn btn-danger btn-sm"><i class="fa-solid fa-plus"></i></button>
    <button type="button" wire:click="decrement" class="btn btn-success btn-sm"><i class="fa-solid fa-minus"></i></button>
    <input type="number" name="" id="" wire:change="adjustValue($event.target.value)">
    <button wire:click="addValue" type="button" class="btn btn-warning btn-sm">Add</button>
</div>