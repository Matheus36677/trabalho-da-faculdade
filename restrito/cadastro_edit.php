<?php include "../validar.php";
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <title>Alteração de Cadastro</title>
  </head>
  <body>

     <?php

     include "conexao.php";
     $id = $_GET['id'] ?? '';
     $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

     $dados = mysqli_query($conn, $sql);
     $linha = mysqli_fetch_assoc($dados);



     ?>

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
          <form class="row g-3" action="edit_script.php" method="POST">
            <div class="col-md-5">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control"name="nome" required value="<?php echo $linha['nome']; ?>">

              </div>
              <div class="col-md-3">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control"name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">

              </div>
              <div class="col-md-7">
                <label for="email">Email</label>
                <input type="email" class="form-control"name="email" value="<?php echo $linha['email']; ?>">

              </div>
              <div class="col-md-3">
                <label for="telefone">telefone</label>
                <input type="text" class="form-control"name="telefone" value="<?php echo $linha['telefone']; ?>">

              </div>
              <div class="col-8">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control"name="endereco" value="<?php echo $linha['endereco']; ?>">
              
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
                <input type="text" class="form-control"name="nome_animal" value="<?php echo $linha['nome_animal']; ?>">

              </div>
              <div class="col-md-3">
                <label for="data_animal">Data de Nascimento</label>
                <input type="date" class="form-control"name="data_animal" value="<?php echo $linha['data_animal']; ?>">

              </div>
              <div class="col-md-5">
                <label for="raca">Raça</label>
                <input type="text" class="form-control"name="raca" value="<?php echo $linha['raca']; ?>">

              </div>
              <div class="col-md-3">
                <label for="sexo">Sexo</label>
                <input type="text" class="form-control"name="sexo" value="<?php echo $linha['sexo']; ?>">


              </div>
              <div class="col-12">
                <input type="submit" href="pesquisa.php" class="btn btn-success" value="Salvar Alterações">
                <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']?>">
              </div>
          </form>
        </div>
      </div>
    </div>
    

    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>