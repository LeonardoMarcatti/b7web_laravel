@include('templates/header',['title' => $title])
<main>
  <section>
    @include('components.include', ['html' => $info])
  </section>
</main>
@include('templates/footer', ['footer' => $footer])