<?php
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
    <h1>Ola <?php echo $_SESSION['nomeuserlogado']; ?></h1> 
    <a href="/projeto_fcamara_2021/_api/function/logout.php">logout</a>   
</body>
</html>
