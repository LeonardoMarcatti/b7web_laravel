@include('templates/header', ['title' => $title])
<main>
  <section>
    <x-include2>
      <h1>Um título qualquer</h1>
    </x-include2>
  </section>
</main>
@include('templates/footer', ['footer' => $footer])