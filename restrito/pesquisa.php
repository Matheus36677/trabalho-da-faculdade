<?php include "../validar.php";
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    

    <title>Pesquisar</title>
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


    <?php
      
      $pesquisa = $_POST['busca'] ?? '';
      

      include "conexao.php";

      $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

      $dados = mysqli_query($conn, $sql);

      ?>


    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pesquisar</h1>
              <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <form class="d-flex" action="pesquisa.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                  </form>
                </div>
             </nav>

             <table class="table table-hover">
               <thead>
                 <tr>
                   <th scope="col">Nome</th>
                   <th scope="col">Data de Nascimento</th>
                   <th scope="col">Email</th>
                   <th scope="col">Telefone</th>
                   <th scope="col">Endereço</th>
                   <th scope="col">Funções</th>
                 </tr>
               </thead>
               <tbody>
                  
                  <?php

                  while ($linha = mysqli_fetch_assoc($dados) ) {
                    $cod_pessoa = $linha['cod_pessoa'];
                    $nome = $linha['nome'];
                    $data_nascimento = $linha['data_nascimento'];
                    $email = $linha['email'];
                    $telefone = $linha['telefone'];
                    $endereco = $linha['endereco'];
                    $data_nascimento = mostra_data($data_nascimento);

                    echo "<tr>
                              <th scope='row'>$nome</th>
                              <td>$data_nascimento</td>
                              <td>$email</td>
                              <td>$telefone</td>
                              <td>$endereco</td>
                              <td width=150px>
                                  <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                                  <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                                  onclick=" .'"' ."pegar_dados($cod_pessoa, '$nome')" .'"'  .">Excluir</a>
                              </td>
                          </tr>";
                  }

                ?>
                 
                
               </tbody>
             </table>
          
          
        </div>
      </div>
    </div>

   
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role= "document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
              <span arian hidden="true">&time;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="excluir_script.php" method="POST"> 
           <p>Deseja realmente excluir <b id="nome_pessoa">Nome do pessoa</b>?</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
              <input type="hidden" name="nome" id="nome_pessa_1" value="">
              <input type="hidden" name="id" id="cod_pessoa" value="">
              <input type="submit" class="btn btn-danger" value="Sim">
            </form>
          </div>
        </div>
      </div>
    </div>

 

    <script type="text/javascript">
      function pegar_dados(id, nome){
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('nome_pessa_1').value = nome;
        document.getElementById('cod_pessoa').value = id;
      }
    </script>

    
 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>