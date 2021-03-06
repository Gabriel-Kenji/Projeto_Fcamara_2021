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
        <header id="header">
                <nav>
                    <a class="logo">aFetivo</a>
                    <div class="mobile-menu" id="mobile-menu">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <ul class="nav-list" id="nav-list">
                        <li>
                            <a href="_api/function/logout.php">
                                <button class="login" onclick="openLogin()">Sair</button>
                            </a>
                        </li>
                    </ul>
                </nav>
        </header>

    <div class="container">
        <div class="content">
            <div class="row-topo">
                <div>
                    <a href="dashboard-doador.php" ><i class="fas fa-arrow-left"></i></a>
                </div>
                <div>
                    <i class="fas fa-cog"></i>
                    <a><i class="fas fa-user-alt"></i></a> 
                </div>
            </div>

            <h2>Seleciona os itens da sua doação:</h2>
            <div class="form">
                <form action="_api/CadastroDoacao.php" method="post">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <td>Item</td>
                                
                                <td>Quantidade</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include("_api/ListaMateriaisAluno.php");?>
                            <!-- <tr>
                                <td>borracha</td>
                               
                                <td>
                                    <div class="buttons">
                                        <button onclick="subtraiQnt('qnt-borracha')">-</button>
                                        <input type="text" id="qnt-borracha" value="0">
                                        <button onclick="somaQnt('qnt-borracha')">+</button>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>caneta</td>
                                
                                <td>
                                    <div class="buttons">
                                        <button onclick="subtraiQnt('qnt-caneta')">-</button>
                                        <input type="text" id="qnt-caneta" value="0">
                                        <button onclick="somaQnt('qnt-caneta')">+</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>caderno</td>
                             
                                <td>
                                    <div class="buttons">
                                        <button onclick="subtraiQnt('qnt-caderno')">-</button>
                                        <input type="text" id="qnt-caderno" value="0">
                                        <button onclick="somaQnt('qnt-caderno')">+</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>lapis</td>
                                
                                <td>
                                    <div class="buttons">
                                        <button onclick="subtraiQnt('qnt-lapis')">-</button>
                                        <input type="text" id="qnt-lapis" value="0">
                                        <button onclick="somaQnt('qnt-lapis')">+</button>
                                    </div>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                    <p>Local da entrega:</p>
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