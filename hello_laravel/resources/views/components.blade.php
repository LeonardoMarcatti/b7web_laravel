@include('components.top')

    <header>
        <h1>Header</h1>
        @include('components.nav')
    </header>

    <main>
      <section>
       <x-test data="oasdasdk">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, nobis perferendis itaque impedit magni harum! Dicta in odit, error aliquam laudantium ut laboriosam cum totam maxime ab aspernatur enim libero.
       </x-test>
      </section>
    </main>

@include('components.bottom')
