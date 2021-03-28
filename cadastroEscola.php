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
    <!-- <h1 class="h3 mb-3 fw-normal">Cadastre uma escola</h1> 

    <input name="cd_inep" type="text" id="cd_inep" class="form-control validate" placeholder="Digite o Codigo INEP da escola" required>
  
    <input name="nm_escola" type="text" id="nm_escola" class="form-control validate"
    placeholder="Digite o Nome da escola" required>
    
    <input name="nm_endereco" type="text" id="nm_endereco" class="form-control validate" placeholder="Endereço" required>
    <input name="nm_bairro" type="text" id="nm_bairro" class="form-control validate" placeholder="Bairro" required>
    <input name="nm_cidade" type="text" id="nm_cidade" class="form-control validate" placeholder="Cidade" required>
    

    <select name="sg_uf" class="form-select">
    <option value="" selected>Selecione um Estado</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>
    <input name="cd_cep" type="text" id="cd_cep" class="form-control validate" placeholder="CEP " required>
    
    </div>
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="Enviar">
    <a class="w-100 btn btn-lg btn-success" href="cep.php">BUSCA ESCOLAS POR CEP</a>
  </form>
</main>

<script type="text/javascript">
    $("#cd_inep").mask("00000000");
    $("#cd_cep").mask("00000-000");
</script> -->


  </body>
</html>
