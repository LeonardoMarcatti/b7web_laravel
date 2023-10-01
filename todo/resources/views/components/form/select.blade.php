<div class="inputArea">
  <label for="{{$for}}" class="form-label">{{$label}}</label>
  <select name="{{$for}}" id="{{$for}}" {{isset($required) ? 'required' : ''}}>
    <option value="0" selected disabled>Selecione uma opção</option>
    {{$slot}}
  </select>
</div>