<div class="{{$class}}">
    <div class="{{$labelClass}}">{{$label}}</div>
    <input type="{{$type}}" class="@error($errorName) isInvalid @enderror" placeholder="{{$placeholder}}" name="{{$name}}" value="{{@old($errorName)}}"/>
    @error($errorName)
    <small class="error">
        {{$message}}
    </small>
    @enderror
</div>
