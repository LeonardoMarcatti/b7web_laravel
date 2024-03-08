@include('components.top')


    <header>
      <h1>{{$title}}</h1>
      @include('components.nav')
    </header>

    <main>

      <section>
        <h2 >{{$subTitle}}</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere libero quos vel qui omnis in ducimus eaque quam minus iure! Ratione recusandae natus et porro eos, perferendis tenetur eaque accusamus veritatis autem, aperiam laudantium qui. Laboriosam debitis, vel provident nostrum inventore asperiores quod modi error, voluptatum reprehenderit minus accusamus incidunt.</p>
        <p>Comentário {{-- 1+1 --}}</p>
        <p><b>XSS - Cross Site Scripting Protection: </b> {{$html}}</p>
        <p><b>XSS - Cross Site Scripting Protection - Interpretado: </b> {!!$html!!}</p>
      </section>
      <section>
        <h2>Diretivas</h2>
        <h3>Condicionais</h3>
        <p>{{$title == 'Blade' ? 'Sim' : 'Não'}}</p>
        <span>Diretiva if</span>
        @if($title == 'Blade')
          <p>Sim</p>
        @else
          <p>Não</p>
        @endif
        <h3>Laços de Repetição</h3>
        <div id="repeat">
          <div>
          <h3>for</h3>
            @for($i = 0; $i < 5; $i++)
              <p>Valor de i: {{$i}}</p>
            @endfor
          </div>
          <div>
            <h3>forEach</h3>
            @foreach($ingredients as $key => $ing )
              <p>Item: {{$key}} - {{$ing}} -
                @component('components.button')
                  @slot('color')
                   red
                  @endslot
                  @slot('href')
                    https://www.google.com
                  @endslot
                    Deletar

                @endcomponent -
                @component('components.button')
                  @slot('color')
                    blue
                  @endslot
                  @slot('href')
                    https://www.yahoo.com.br
                  @endslot
                  Editar
                @endcomponent</p>

            @endforeach
          </div>
        </div>
      </section>

    </main>

@include('components.bottom')
