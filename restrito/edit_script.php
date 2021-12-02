<?php include "../validar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="css/bootstrap.css" rel="stylesheet">

    <title>Alteração de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
          include "conexao.php";
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $data_nascimento = $_POST['data_nascimento'];
          $email = $_POST['email'];
          $telefone = $_POST['telefone'];
          $endereco = $_POST['endereco'];
          $nome_animal = $_POST['nome_animal'];
          $data_animal = $_POST['data_animal'];
          $raca = $_POST['raca'];
          $sexo= $_POST['sexo'];
          

          $sql = "UPDATE `pessoas` set `nome`='$nome',`data_nascimento`='$data_nascimento',`email`='$email',`telefone`='$telefone',`endereco`='$endereco',`nome_animal`='$nome_animal',`data_animal`='$data_animal',`raca`='$raca',`sexo`='$sexo' WHERE cod_pessoa = $id";


          if (mysqli_query($conn, $sql)) {
            header('location: pesquisa.php');
          } else
            mensagem("$nome NÃO alterado!", 'danger');

        ?>
        <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>