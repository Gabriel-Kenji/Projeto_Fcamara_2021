<?php
include("_api/Select_Escolas.php")
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
  <form action="_api/Cadastro_Aluno.php" method="post">
    <!-- <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1> 

    <input name="ra" type="text" id="defaultForm-pass" class="form-control validate" placeholder="RA" required>

    <input name="nome" type="text" id="defaultForm-pass" class="form-control validate" placeholder="Nome" required>
  
    <input name="email" type="email" id="defaultForm-email" class="form-control validate"
    placeholder="Email" required>
    
    <input name="senha" type="password" id="defaultForm-pass" class="form-control validate" placeholder="Senha" required>
    
    <input name="senhaconf" type="password" id="defaultForm-pass" class="form-control validate" placeholder="Senha Confirmar " required>
    
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
    
    <input name="cidade" type="text" id="defaultForm-pass" class="form-control validate" placeholder="Cidade" required>

    <input name="bairro" type="text" id="defaultForm-pass" class="form-control validate" placeholder="Bairro" required>

    <input name="telefone" type="text" id="defaultForm-pass" class="form-control validate" placeholder="Telefone (opcional)" >
    
    <select name="inep" class="form-select">
      <option value="" selected>Selecione uma Escola</option>
      <?php 
      
        $contz = 0;
        for($i=0 ; $i<=1; $i++ ){
          if($array[$contz] != null){
              echo $array[$contz][0]. $array[$contz][1] ;
              ?>
              <option value="<?php echo $array[$contz][0] ?>" ><?php echo $array[$contz][1] ?></option><?php
              $contz++;
              $i = 0;
          }
        }
      ?>
    </select>
    
      <div id="inep">
        
      </div>
    
    
    


    
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="Enviar">Cadastrar Aluno</button>
    
    <a href="login_aluno.html">LOGIN ALUNO</a>
  </form>
</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
<script>
  //var fila = setInterval(function() { $('#inep').load('_api/Select_Escolas.php'); }, 99);
</script>


    
  </body>
</html>