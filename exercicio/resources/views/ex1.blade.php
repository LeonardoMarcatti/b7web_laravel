<?php 
  function formatDate(string $var)
  {
    $date = explode('-', $var);
    return $date[2] . '/' . $date[1] . '/' . $date[0];
  }
?>

<main>
  <section>
    @foreach($people as $person)
      @component('components.card')
        @slot('photo')
          {{$person['image']}}
        @endslot
        @slot('name')
          {{$person['nome']}}
        @endslot
        @slot('birth')
          {{$person['birth']}}
        @endslot
        @slot('age')
          {{$person['idade']}}
        @endslot
      @endcomponent
    @endforeach
  </section>
</main>