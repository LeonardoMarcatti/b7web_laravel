<main>
  <section>
    @for($i=1; $i<=$qte; $i++)
      <!-- @component('components/photo')
        @slot('photo')
          {{$url . $i}}
        @endslot
        @slot('number')
          {{$i}}
        @endslot
      @endcomponent -->
      @include('components/photo', ['photo' => $url . $i, 'number' => $i])
    @endfor
  </section>
</main>