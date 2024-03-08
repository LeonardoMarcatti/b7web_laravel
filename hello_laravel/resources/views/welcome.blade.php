@include('components.top')

    <header>
        <h1>Header</h1>
        @include('components.nav')
    </header>

    <main>
      <h1>Bem-vindo {{$name}} {{$lastName}}</h1>
      <h2>Idade: {{$age}} anos</h2>
      <h2>Aniversário: {{$birthday}}</h2>
      <section>
        <h2 >Texto em H2</h2>
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere libero quos vel qui omnis in ducimus eaque quam minus iure! Ratione recusandae natus et porro eos, perferendis tenetur eaque accusamus veritatis autem, aperiam laudantium qui. Laboriosam debitis, vel provident nostrum inventore asperiores quod modi error, voluptatum reprehenderit minus accusamus incidunt.</p>
      </section>
    </main>

@include('components.bottom')

