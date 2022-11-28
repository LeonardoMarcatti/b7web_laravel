  @section('top')
  @show
    <main>
      @yield('content')
    </main>
  @section('bottom')
  <p>Conteúdo 'parent' antes do @@show</p>
  <p>Infelizmente não obedece bem o css que foi carregado</p>
  @show