@include('components.top')

    <header>
        <h1>Header</h1>
        @include('components.nav')
    </header>

    <main>
      <section>
        <h2>Usuários: {{$number}}</h2>
      </section>
    </main>

@include('components.bottom')
