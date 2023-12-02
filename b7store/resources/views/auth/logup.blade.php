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
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />
    <script src="{{ URL::asset('assets/js/logup.js') }}" defer></script>
    <title>B7Store - Cadastre-se</title>
  </head>
  <body>
    <main>
    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <form action="{{route('logupAction')}}" method="post">
            @csrf
          <x-form.input class="name-area" label="Nome" labelClass="name-label" type="text" errorName="name" placeholder="Digite o seu nome" name="name" />
          <x-form.input class="email-area" label="Email" labelClass="email-label" type="email" errorName="email" placeholder="Digite o seu endereço de email" name="email" />
          <div class="password-area">
            <x-form.password-input placeholder="Digite sua senha" id="password" name="password" label="Sua senha"/>
            <x-form.password-input placeholder="Repita senha" id="password_confirmation" name="password_confirmation" label="Repita sua senha"/>
          </div>
          <button class="login-button">Cadastrar</button>
        </form>
        <div class="register-area">
          Já tem cadastro? <a href="{{route('login')}}">Fazer Login</a>
        </div>
      </div>
      <div class="terms">
        Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
        <a href="">Política de Privacidade</a>, e também, em receber
        comunicações via e-mail e push de todos os nossos parceiros.
      </div>
    </div>
    </main>
    <x-base.footer />
  </body>
</html>
