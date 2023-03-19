<div class="inputArea">
  <label for="{{$for}}" class="form-label">{{$label}}</label>
  <textarea name=""{{$for}}" id=""{{$for}}" rows="10" placeholder="{{$placeholder}}" {{isset($required) ? 'required' : ''}}></textarea>
</div>