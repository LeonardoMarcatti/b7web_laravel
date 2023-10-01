@include('templates/header')
<main>
  <section>
    @include('components.include', ['html' => $info])
  </section>
</main>
@include('templates/footer', ['footer' => $footer])