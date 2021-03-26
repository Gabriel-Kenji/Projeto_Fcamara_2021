<?php
session_start(); 
//pegando os dados
$id = $_SESSION['idusuario'];
//verificacao
if(!isset($_SESSION['logado']))
header("Location: /projeto_fcamara_2021/index.html");
?>
 

    <!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Signin Template </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="_api/cadastro.php" method="post">
  <h1 class="h3 mb-3 fw-normal">Ola <?php echo $_SESSION['nomeuserlogado']; ?> </h1> 
    <a href="/projeto_fcamara_2021/_api/function/logout.php">logout</a>
    <br/>
    <br/>
    <!-- <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal">Cadastre uma escola</h1> 

    <input name="cd_inep" type="text" id="cd_inep" class="form-control validate" placeholder="Digite o Codigo INEP da escola" required>
  
    <input name="nm_escola" type="text" id="nm_escola" class="form-control validate"
    placeholder="Digite o Nome da escola" required>
    
    <input name="nm_endereco" type="text" id="nm_endereco" class="form-control validate" placeholder="Endereço" required>
    
    <input name="nm_cidade" type="text" id="nm_cidade" class="form-control validate" placeholder="Cidade" required>
    <input name="sg_uf" type="text" id="sg_uf" class="form-control validate" placeholder="Sigla do Estado" required>
    <input name="cd_cep" type="text" id="cd_cep" class="form-control validate" placeholder="CEP " required>
    
    </div>
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="Enviar">
  </form>
</main>
<script type="text/javascript">
    $("#cd_inep").mask("00000000");
    $("#cd_cep").mask("00000-000");
    $("#sg_uf").mask("AA");
</script>

    
  </body>
</html>
