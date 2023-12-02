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
    <title>B7Store - Selecione Estado</title>
  </head>
  <body>
    <main>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <form action="{{route('selectStateAction')}}" method="post">
            @csrf
            <div class="state-area">
                <select name="state" id="state" class="name-area">
                    <option value="">Selecione seu Estado</option>
                    <option value="DF">Distrito Federal</option>
                    <optgroup label="Sul">
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="PR">Paraná</option>
                    </optgroup>
                    <optgroup label="Sudeste">
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="MG">Minas Gerais</option>
                    </optgroup>
                    <optgroup label="Centro-Oeste">
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="GO">Goiás</option>
                    </optgroup>
                    <optgroup label="Nordeste">
                        <option value="BA">Bahía</option>
                        <option value="SE">Sergipe</option>
                        <option value="AL">Alagoas</option>
                        <option value="PE">Pernanbuco</option>
                        <option value="PA">Paraíba</option>
                        <option value="PI">Piauí</option>
                        <option value="MA">Maranhão</option>
                        <option value="CE">Ceará</option>
                        <option value="RN">Rio Grande do Norte</option>
                    </optgroup>
                    <optgroup label="Norte">
                        <option value="AM">Amazonas</option>
                        <option value="RR">Roraima</option>
                        <option value="RO">Rondonia</option>
                        <option value="AP">Amapá</option>
                        <option value="AC">Acre</option>
                        <option value="PA">Pará</option>
                        <option value="TO">Tocantis</option>
                    </optgroup>
                </select>
            </div>
          <button class="login-button">Selecione</button>
        </form>
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
