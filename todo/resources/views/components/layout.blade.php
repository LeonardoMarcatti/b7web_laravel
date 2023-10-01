<!DOCTYPE html>
<html lang="pt-BR">

  <head>
  <meta charset="UTF-8">
   <meta http-equiv="content-type" content="text/html">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
   <link rel="icon" href="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" type="image/png" sizes="16x16">
   <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
   <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous" defer></script>
    <title>{{$tab ?? 'Genérico'}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
  </head>
  <body>
    <div class="my_container">
      <div class="sidebar"><img src="{{ URL::asset('assets/images/logo.png') }}" alt="" srcset=""></div>
      <div class="content">
        <span id="links">
          <p>{{$authUser?? ''}}</p>
          <div>
            @if(!$authUser)
              @if($links === 'logup')
                <a href="<?= route('login') ?>">Login</a>
              @endif
            @endif            
            @if($authUser)
              @if($links != 'home')
                <a href="<?= route('home') ?>">Voltar</a>
              @endif
              <a href="<?= route('logout') ?>">Sair</a>
            @endif
          </div>
        </span>
        @if(!empty($btn))
          <nav>{{$btn}}</nav>
        @endif
        <main>
          {{$main}}
        </main>
      </div>
    </div>
  </body>

</html>