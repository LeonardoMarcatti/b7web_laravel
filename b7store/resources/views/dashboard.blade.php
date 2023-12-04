<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" http-equiv="content-type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/3/31/Webysther_20160423_-_Elephpant.svg" type="image/png" sizes="16x16">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/myAccountStyle.css') }}" />
    <script src="{{ URL::asset('assets/js/logup.js') }}" defer></script>

    <title>B7Store - Minha Conta</title>
  </head>
  <body>
  <x-base.header />
    <main>
      <div class="my-account-page">
        <div class="sidebar">
          <div class="sidebar-top">
            <a href="/myAccount.html" class="config"
              ><img src="{{ URL::asset('assets/icons/configIcon.png') }}" /> Configurações</a
            >
            <a href="/myAds.html"
              ><img src="{{ URL::asset('assets/icons/layersIonGray.png') }}" /> Meus Anúncios</a
            >
          </div>
          <div class="sidebar-bottom">
            <a href="/index.html"
              ><img src="{{ URL::asset('assets/icons/logoutIcon.png') }}" /> Sair</a
            >
          </div>
        </div>
        <div class="profile-area">
            @if(session('success'))
                <span class="success">
                    <small>{{session('success')}}</small>
                </span>
            @endif
          <h3 class="profile-title">Meu perfil</h3>
          <form method="post" action="{{route('myAccountAction')}}">
            @csrf
            <div class="name-area">
              <div class="name-label">Nome</div>
              <input
                type="text"
                placeholder="Digite o seu nome"
                name="name"
                value="{{$user->name}}"
              />
                @error('name')
                    <small class="error">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="email-area">
              <div class="email-label">E-mail</div>
              <input
                type="email"
                placeholder="Digite o seu e-mail"
                name="email"
                value="{{$user->email}}"
              />
              @error('email')
                <small class="error">
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="state-area">
              <div class="state-label">Estado</div>
              <select class="states" name="state_id">
              <option value="">Selecione seu Estado</option>
                    @foreach($states as $state)
                        <option value="{{$state['id']}}" {{$state->id == $user->state_id ? 'selected' : ''}}>{{$state['name']}}</option>
                    @endforeach
              </select>
                @if(session('errorMessage'))
                    <small class="error">{{session('errorMessage')}}</small>
                @endif
            </div>
            <button type="submit" class="save-button">Salvar</button>
          </form>
        </div>
      </div>
    </main>
    <footer>
      <span>powered by B7Web</span>
      <span>B7Store</span>
    </footer>
  </body>
</html>
