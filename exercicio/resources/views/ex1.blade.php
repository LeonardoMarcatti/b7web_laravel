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
      @include('components.card', ['person' => $person])
    @endforeach
  </section>
</main>