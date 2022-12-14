@if (is_array($ing))
  @for ( $i = 0; $i < count($ing); $i++)
    <span>{{$ing[$i]}}</span>
  @endfor
@else
  <h2>
    {{$ing}}
  </h2>
@endif

