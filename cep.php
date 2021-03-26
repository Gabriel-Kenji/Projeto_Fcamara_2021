<?php
function get_endereco($cep){
  // formatar o cep removendo caracteres nao numericos
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Signin Template · Bootstrap v5.0</title>

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
              <h1 class="h3 mb-3 fw-normal">Pesquisar Endereço</h1>
              <form action="_api/cep.php" method="post">
                <!-- <input name="cd_cep" type="text"  id="cd_cep" class="form-control validate"> -->
                <input name="cep" type="text" id="cep" class="form-control validate" placeholder="CEP " required>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Pesquisar Endereço</button>
              </form>
          </main>

      <script type="text/javascript">
        $("#cep").mask("00000-000");
      </script>
    
  </body>
</html>




<!-- <?php //if($_POST['cep']){ ?>
<h2>Resultado da Pesquisa</h2>
<p>
  <?php //$endereco = get_endereco($_POST['cep']); ?>
  <b>CEP: </b> <?php //echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php //echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php //echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php// echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php// echo $endereco->uf; ?><br>
</p>
<?php //} ?> -->