<div style="display: flex; flex-flow: row;">
<h3>{{$hook}}</h3>
    <div style="background-color: {{$color}};"  class="col-3">
        <h1>
            @if($up)
                {{strtoupper($salute)}}, {{strtoupper($name)}}
            @else 
                {{$salute}}, {{$name}}
            @endif
            </h1>
        <input type="text" name="name" id="name" wire:model.live="name" class="form-control">
        <select name="" id="" wire:model.live="salute">
            @foreach ($saluteOptions as $item)
                <option value="{{$item}}">{{$item}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-1">
        <input type="color" name="color" id="color" wire:model.live="color" class="form-control">
        <label for="up">UpperCase?</label>
        <input type="checkbox" name="up" id="up" wire:model.live="up" checked={{$up}}>
    </div>

</div>
