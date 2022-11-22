  <?php
  function teste($v1, $v2)
  {
    return $v1 + $v2;
  }
  ?>
  <main>
    <section>
      <h2>{{$message}}</h2>
      <h3>{{teste(12,15)}}</h3>
      <!-- Abaixo temos o código comentado onde o Blade não processa -->
      <h3>{{--teste(1,1)--}}</h3>
      <!-- Abaixo não escapamos elementos html e estamos sujeito a ataques cross scripting -->
      {!!$html!!}
      <!-- Aceita somente ternário -->
      <h3>{{ ($message === 'Bem vindo')? 'OK' : 'Error!' }}</h3>
      <!-- aso queiramos usar if/else devemos usar a seguinte estrutura -->
      <h3>
        @if($message === 'Bem vindo')
          OK
        @else
          Error!
        @endif
      </h3>
      <!-- Abaixo uma forma como o Blade ignora o que depois de arroba permitindo que o que tenha dentro das chaves seja processada por outros renderizadores front end tais como React, Angula ou Vue -->
      @{!!$html!!}
        <br>
      @for($i=1; $i<=10; $i++)
        <p>O valor é: {{$i}}</p>
      @endfor
    </section>
  </main>