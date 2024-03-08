@include('components.top')

    <header>
        <h1>Header</h1>
        @include('components.nav')
    </header>

    <main>
      <h1>Include</h1>
      <section>
        <h2 >Texto em H2</h2>
        <p>Include é bom para partes estáticas de um site como um header, menus ou footer</p>
        <p>É possível enviar dados para o include</p>
        @include('components.myComponent', ['data' => 'My data'])
      </section>
    </main>

@include('components.bottom')
