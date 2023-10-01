<main>
  <section>
    <h2>Include</h2>
    <p>Includes são bons para dados estáticos</p>
    @foreach ($data as $ing)
      @include('components.includeComponent', ['ing' => $ing])
    @endforeach
  </section>
</main>