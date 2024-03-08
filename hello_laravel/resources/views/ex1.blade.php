@include('components.top')

    <header>
      <h1>{{$title}}</h1>
      @include('components.nav')
    </header>

    <main>
      <section>
         <h2>Fotos</h2>
         <div class="cards">
           @forEach($people as $person)
            @component('components.card')
              @slot('image')
                {{$person['image']}}
              @endslot
              @slot('name')
                {{$person['name']}}
              @endslot
              @slot('age')
                {{$person['age']}}
              @endslot
              @slot('birth')
                {{$person['birth']}}
              @endslot
            @endcomponent
           @endforEach
          </div>

          <div class="cards">
            @forEach($people as $person)
                @include('components.includeCard', $person)
            @endforEach
          </div>
      </section>

    </main>

@include('components.bottom')

