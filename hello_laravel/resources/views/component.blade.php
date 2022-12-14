<main>
    <section>
      <h2>Introdução a Componentes</h2>
      <h3>{{$message}}</h3>
      <p>Componentes são melhores para enviar pedaços de HTML bem como quando enviamos mais variáveis a sintaxe é melhor.</p>
      @foreach ($data as $ing)
      <div>
        <p>{{$ing}}</p>
        <span>
          @component('components.button')
            Editar
            @slot('class')
              'btn btn-success'
            @endslot
            @slot('href')
              'http://www.google.com'
            @endslot
          @endcomponent
          @component('components.button')
            Deletar
            @slot('class')
              'btn btn-danger'
            @endslot
            @slot('href')
              'http://www.facebook.com'
            @endslot
          @endcomponent
        </span>
      </div>
      @endforeach
    </section>
  </main>