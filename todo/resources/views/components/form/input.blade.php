<div class="inputArea">
  <label for="{{$for}}" class="form-label">{{$label ?? ''}}</label>
  <input value="{{$value ?? ''}}" type="{{$type}}" name="{{$for}}" id="{{$for}}" placeholder="{{$placeholder ?? ''}}" {{isset($required) ? 'required' : ''}}>
</div>