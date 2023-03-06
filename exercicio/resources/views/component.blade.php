@include('templates/header')
<main>
  <section>
    <x-test.div [arr => ['a', 'b', 'c']]>
      @slot('data')
        <x-test.h1>H1</x-test.h1>
        <x-test.p>H2</x-test.p>
      @endslot
    </x-test.div>
  </section>
</main>
@include('templates/footer')