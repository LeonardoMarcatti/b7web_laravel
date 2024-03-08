@include('components.top')

    <header>
      <h1>{{$title}}</h1>
      @include('components.nav')
    </header>

    <main>
      <section>
         <h2>Fotos</h2>
         <div id="fotos">
            @for($i=1; $i <= 50; $i++)
               <img src="{{$url . $i}}" alt="" class="image">
            @endfor
         </div>
      </section>

    </main>

@include('components.bottom')
