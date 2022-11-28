@include('templates/header')
<main>
  <section>
    <h1>Include If</h1>
    @includeif('components.includeIf', ['message' => '<h2>Hello!</h2>'])
  </section>
</main>
@include('templates/footer')