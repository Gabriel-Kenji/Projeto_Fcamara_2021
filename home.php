<?php
require_once 'conexao.php';

session_start(); 

//pegando os dados
$id = $_SESSION['idusuario'];

//verificacao

if(!isset($_SESSION['logado']))
header("Location: /projeto_fcamara_2021/index.html");

?>

<html>
<head>
    <title> Logado </title>
</head>
<body>
    <h1>Ola <?php echo $_SESSION['idusuario']; ?></h1> 
    <a href="logout.php">logout</a>   
</body>
</html>
