<?php
session_start(); 
//pegando os dados
$id = $_SESSION['RaAuluno'];
include("_api/Select_Material.php");
//verificacao
if(!isset($_SESSION['logado'])){
  header("Location: /projeto_fcamara_2021/index.html");
}

?>


 <!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>HOME </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

  





    
<main class="form-signin">
  <form action="_api/cadastroEscola.php" method="post">
  <h1 class="h3 mb-3 fw-normal">Ola <?php echo $_SESSION['nomeuserlogado']; ?> </h1> 
    <a href="/projeto_fcamara_2021/_api/function/logout.php">logout</a>
    <br/>
    <br/>
    <!-- <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal">Cadastre de predido</h1> 

    <?php 
      
    $contz = 0;
      for($i=0 ; $i<=1; $i++ ){
        if(isset($array[$contz]) && !empty($array[$contz])){
           
           ?><a><?php echo $array[$contz][1] ; ?></a>
           <input name="nm_endereco" type="text" id="material<?php echo $array[$contz][0] ;?>" class="form-control validate" placeholder="Quantidade" required>
          <?php
          $contz++;
          $i = 0;
          }
        }
    ?>
    

  
    
    
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="Enviar">
  </form>
</main>




  </body>
</html>
