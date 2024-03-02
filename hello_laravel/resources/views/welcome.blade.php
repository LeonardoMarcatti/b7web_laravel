<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/free-laravel-9132611-7417040.png" type="image/png"
      sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="{{URL::asset('app.css')}}">
    <title>Hello LARAVEL</title>
  </head>

  <body>

    <header>
        <h1>Header</h1>
        <nav>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Services</a>
                </li>
                <li>
                    <a href="">Products</a>
                </li>
                <li>
                    <a href="">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
      <h1>Bem-vindo {{$name}} {{$lastName}}</h1>
      <h2>Idade: {{$age}} anos</h2>
      <h2>Aniversário: {{$birthday}}</h2>
      <section>
        <h2 >Texto em H2</h2>
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere libero quos vel qui omnis in ducimus eaque quam minus iure! Ratione recusandae natus et porro eos, perferendis tenetur eaque accusamus veritatis autem, aperiam laudantium qui. Laboriosam debitis, vel provident nostrum inventore asperiores quod modi error, voluptatum reprehenderit minus accusamus incidunt.</p>
      </section>
    </main>

    <footer>
      <small>Footer</small>
    </footer>
  </body>
</html>