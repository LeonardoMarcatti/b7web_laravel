<div class="password-input-area">
<div class="password-label">{{$label}}</div>
   <span>
      <input type="password" class="@error($name) isInvalid @enderror" placeholder="{{$placeholder}}" name="{{$name}}" id="{{$id}}"/>
      <img src="assets/icons/eyeIcon.png" alt="Ícone mostrar/ocultar senha" onclick="toggleVisibility('{{$id}}')"/>
   </span>
   @error('password')
   <small class="error">
      {{$message}}
   </small>
   @enderror
</div>
