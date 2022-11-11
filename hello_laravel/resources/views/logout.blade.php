<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/html5-40-1175193.png" type="image/png" sizes="16x16">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>
  <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
  <title>Logout</title>
  <style>
    body {
      display: grid;
      grid-template-columns: 1fr;
      min-height: 100vh;
      grid-template-rows: 50px minmax(calc(100vh - 80px), auto) 30px;
    }

    header {
      background-color: gray;
    }

    main {
      background-color: silver;
    }

    section {
      display: flex;
      flex-flow: column nowrap;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    footer {
      background-color: rgb(39, 39, 39);
      color: white;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <h1>Header</h1>
  </header>
  <main>
    <section>
      <h1>Logout Page</h1>
      <h2>Controller: SiteController</h2>
      <h3>Method: logOut()</h3>
    </section>
  </main>
  <footer>
    <small>Footer</small>
  </footer>
</body>

</html>