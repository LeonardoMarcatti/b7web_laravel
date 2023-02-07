<!DOCTYPE html>
<html lang="pt-BR">

  <head>
  <meta charset="UTF-8">
   <meta http-equiv="content-type" content="text/html">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
   <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/3/31/Webysther_20160423_-_Elephpant.svg" type="image/png" sizes="16x16">
   <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
    <title>ToDo App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ URL::asset("assets/css/style.css") }}>
  </head>

  <body>
    <div class="my_container">
      <div class="sidebar">Logo</div>
      <div class="content">
        <nav>
          <a href="#" class="btn btn-primary">Criar Tarefa</a>
        </nav>
        <main>
          <section class="graph">
            <div class="graph_header">
              <h2>Progresso do Dia</h2>
              <hr>
              Data
            </div>
            <div class="graph_header_subtitle">
              Tarefas: <b>3/6</b> 
            </div>
          </section>
          <section class="list">
            Lista
          </section>
        </main>
      </div>
    </div>
  </body>

</html>