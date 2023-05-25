<div class="inputArea">
  <label for="{{$for ?? ''}}" class="form-label">{{$label ?? ''}}</label>
  <input type="{{$type}}" name="{{$for}}" id="{{$for ?? ''}}" placeholder="{{$placeholder ?? ''}}" {{isset($required) ? 'required' : ''}} />
  <br>
  <small>{{$small ?? ''}}</small>
</div>