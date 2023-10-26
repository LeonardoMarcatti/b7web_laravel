@if (is_array($ing))
  @for ( $i = 0; $i < count($ing); $i++)
    <small>{{$ing[$i]}}</small>
  @endfor
@else
  <h2>
    {{$ing}}
  </h2>
@endif

