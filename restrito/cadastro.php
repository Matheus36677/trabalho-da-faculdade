<?php include "../validar.php";
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    

    <title>Cadastro</title>
  </head>
  <body>
    <header class="header">
      <a id="oi">Clinica Veterinaria</a>
      <nav>
        <ul class="menu">
          <li><a  id="btnn" href="../logout.php" role="button">Sair</a>
        </ul>
      </nav>
          
    </header>
    <input type="checkbox" id="chec">
    <label id="labell" for="chec">
      <img src="img/risco_menu.png">
    </label>
    <nav id="navi">
      <ul id="uli">
        <li><a id="meu-menu" href="index.php">Home</a>
        <li><a id="meu-menu" href="cadastro.php">Cadastro</a>
        <li><a id="meu-menu" href="pesquisa.php">Clientes</a>
      </ul>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cliente</h1>
          <form class="row g-3" action="cadastro_script.php" method="POST">
            <div class="col-md-5">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="col-md-3">
              <label for="data_nascimento">Data de Nascimento</label>
              <input type="date" class="form-control" name="data_nascimento">
            </div>
            <div class="col-md-7">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-3">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" name="telefone">
            </div>
            <div class="col-8">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" name="endereco">
            </div>
        </div>
      </div>
    </div>
    

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pet</h1>
          <div class="row g-3">
            <div class="col-md-5">
              <label for="nome_animal">Nome do Animal</label>
              <input type="text" class="form-control" name="nome_animal">
            </div>
            <div class="col-md-3">
              <label for="data_animal">Data de Nascimento</label>
              <input type="date" class="form-control" name="data_animal">
            </div>
            <div class="col-md-5">
              <label for="raca">Raça</label>
              <input type="text" class="form-control" name="raca">
            </div>
            <div class="col-md-2">
              <label for="sexo">Sexo</label>
              <input type="text" class="form-control" name="sexo">
            </div>
            <div class="col-12">
              <input type="submit" class="btn btn-success" href="pesquisa.php">
            </div>
          </form>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>