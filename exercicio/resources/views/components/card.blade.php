<?php
  use Carbon\Carbon;
  $now = new DateTime('now');
  $years = Carbon::parse($person['birth'])->age;
?>
<div>
  <img src={{$person['image']}} alt={{$person['nome']}}>
  <h4>{{$person['nome']}}</h4>
  <p>{{formatDate($person['birth'])}}</p>
  <b>Age: {{$person['idade']}}</b>
</div>