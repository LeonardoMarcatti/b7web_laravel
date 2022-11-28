<?php
  use Carbon\Carbon;
  $now = new DateTime('now');
  $years = Carbon::parse($birth)->age;
?>
<div>
  <img src={{$photo}} alt={{$name}}>
  <h4>{{$name}}</h4>
  <p>{{formatDate($birth)}}</p>
  <b>Age: {{$years}}</b>
</div>