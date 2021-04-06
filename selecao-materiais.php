<?php
session_start(); 

$id = $_SESSION['RaAluno'];
if(!isset($_SESSION['RaAluno'])){
    header("Location: /projeto_fcamara_2021/Index.html");
}
include("_api/Select_Material.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Doação</title>
    <link rel="stylesheet" href="./css/selecao-materiais.css">
    <link rel="stylesheet" href="./css/mobile-navbar.css">
</head>

<!-- <body onload="listarItens()"> -->
<body>
    <header>
        <a href="Index.html" class="logo">aFetivo</a>
        <ul>
            <li><button  class="login"><a href="_api/function/logout.php" class="login">Sair</a></button></li>
        </ul>
    </header>

    <div class="container">
        <div class="content">
            <div class="row-topo">
                <div>
                    <a href="dashboard-aluno.php"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <h2>Seleciona os itens da sua doação:</h2>
            <div class="form">
                <form action="_api/Cadastro_Pedido.php" method="post">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <td>Item</td>
                                
                                <td>Quantidade</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contz = 0;
                            foreach($MaterialDao->read() as $material):
                                if(isset($array[$contz]) && !empty($array[$contz])){
                                $name = "material".$array[$contz][0];
                                
                                ?>
                                <input type="hidden" id="<?php $Material['cd_material'] ?>">
                                <tr>
                                    
                                    <td><?php echo $material['nm_material'];?></td>
                                    <td>
                                        <div class="buttons">
                                            <button onclick="subtraiQnt('<?php echo $name ?>')">-</button>
                                            <input type="text" id="<?php echo $name ?>" name="<?php echo $name ?>" value="0" >
                                            <button onclick="somaQnt('<?php echo $name ?>')">+</button> 
                                            
                                        </div>
                                    </td>
                                </tr>  
                                    <?php
                                $contz++;
                                }
                                endforeach;

                                ?>    
                            <tr>
                        <input type="hidden" type="text" name="ra" value="<?php echo $id ?>">        
                    </table>
                    <input type="submit" value="solicitar doação"> 
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/mobile-navbar.js"></script>
</body>
<script type="text/javascript" src="./js/script.js"></script>
<script src="https://kit.fontawesome.com/57dc5e43be.js" crossorigin="anonymous"></script>
</html>