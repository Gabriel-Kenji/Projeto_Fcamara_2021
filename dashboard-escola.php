<?php
include("_api/Select_Aluno_Escola.php");

//pegando os dados
$id = $_SESSION['InepEscola'];
if(!isset($_SESSION['InepEscola'])){
    header("Location: Index.html");
}


?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>aFetivo - dashboard-escola</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/dashboard-escola.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="./css/mobile-navbar.css">
</head>
 
<body>
<header id="header">
        <nav>
            <a class="logo">aFetivo</a>
            <div class="mobile-menu" id="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list" id="nav-list">
                <li><a href="">Home</a></li>
                <li>
                    <a href="_api/function/logout.php">
                        <button class="login" onclick="openLogin()">Sair</button>
                    </a>
                </li>
            </ul>
        </nav>
 </header>
    <section class="u-clearfix u-custom-color-3 u-section-1" id="sec-5665">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-left u-border-3 u-border-white u-container-style u-expanded-width u-group u-radius-30 u-shape-round u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h1 class="u-heading-font u-text u-title u-text-1">Nome da escola</h1>
                    <h4 class="u-text u-text-2">Histórico de doaç​ões feitas</h4><br>
                    <a href="#" class="u-btn u-btn-round u-button-style u-hover-palette-1-dark-2 u-palette-1-dark-3 u-radius-30  u-text-body-alt-color u-btn-1">alunos
                                                                                            cadastrados</a>
                    <div class="u-table u-table-responsive u-table-1">
                        <table class="u-table-entity">
                            <colgroup>
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                            </colgroup>
                            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
                                <?php include("_api/listaDoacaoEscola.php"); ?>
                            </tbody>
                        </table>
                    </div><br>
                    <h4 class="u-text u-text-3">Pedidos de doação</h4><br>
                    <div class="u-table u-table-responsive u-table-2">
                        <table class="u-table-entity">
                            <colgroup>
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                            </colgroup>
                            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
                                <?php include("_api/listaPedidoEscola.php"); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-87cb">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Desenvolvido pelo Squad #29, no Programa de Formação 2021.
            </p>
        </div>
    </footer>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/mobile-navbar.js"></script>
</body>

</html>