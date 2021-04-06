<?php
include("_api/Select_Escolas_Doar.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação</title>
    <link rel="stylesheet" href="./css/realizar-doacao.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">
    <script src=”http://code.jquery.com/jquery-1.11.2.min.js”> </script> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"> </script>
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

            </div>
            <h2>Selecione o local de doação:</h2>
            <div class="select-location">
                <div class="location">
                    <form id='cidades' class="form-horizontal" method="POST" action='#' name="cidade">
                        <h3>Seleciona o estado:</h3>
                        <select name="estado" id="estado" onchange="buscaCidades(this.value)">
                            <option value="">Selecione o Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceara</option>
                            <option value="DF">Distrito Feredral</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="PR">Paraná</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SE">Sergipe</option>
                            <option value="SP">São Paulo</option>
                            <option value="TO">Tocantins</option>
                        </select>
                </div>

                <div class="location">
                    <h3>Seleciona a cidade</h3>
                    <select name="id_cidade" id="cidade" class="form-control"
                        onchange="document.forms['cidade'].submit();">
                    </select>
                </div>
                </form>

                <form id='Escolas' class="form-horizontal" method="POST" action='#' name="escola">
                    <div class="location">
                        <h3>Seleciona a escola:</h3>
                        <select name="id_escola" id="escola" class="form-control"
                            onchange="document.forms['escola'].submit();">
                            <option value="">Escolha uma escola</option>
                            <?php
                            $contz = 0;
                            for($i=0 ; $i<=1; $i++ ){
                                if(isset($array[$contz]) && !empty($array[$contz])){
                                    echo $array[$contz][0]. $array[$contz][1] ;
                                    ?>
                            <option value="<?php echo $array[$contz][0] ?>"><?php echo $array[$contz][1] ?></option><?php
                                    $contz++;
                                    $i = 0;
                                }
                            }
                        ?>
                        </select>
                    </div>
                </form>

            </div>
            <div class="list-students">
                <table class="content-table">
                    <thead>
                        <tr>
                            <td>RA</td>
                            <td>data solicitação</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("_api/Pesquisa_pedidos.php");
                        ?>
                 
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <?php include("_api/teste.php");?>

    <div class="bg-modal" id="bg-modal">
        <div class="modal">

            <div class="container-modal" >
                <span class="close-modal" onclick="closeModal()">&times;</span>
                
                <div id="modal">
                <h3>Aluno:[]</h5>
                <div class="information">
                    <p>Escola:[]</p>
                    <p>Data da solicitação:[]</p>
                </div>
                <h3>Lista de materiais:</h3>
                <div class="list">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <td>Item</td>
                                <td>Quantidade</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <a href="./selecao-materiais.html">confirmar doação</a> 
                </div>
                </div>
                
                        
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/mobile-navbar.js"></script>
</body>
<script type="text/javascript" src="./js/scriptRD.js"></script>
<script src="https://kit.fontawesome.com/57dc5e43be.js" crossorigin="anonymous"></script>
<script>
    $('#enviaDados').submit(function () {
        var form = $(this);
        $.post(form.attr('action'), form.serialize(), function (retorno) {

        });
        return false;
    });
</script>

<script>
    $(document).ready(function () {

        var dataString = $("#Escolas").serialize();

        $.ajax({
            type: "POST",
            url: "_api/Pesquisa_pedidos.php",
            data: dataString,
            success: function (data) {

            }
        });

        return false;
    });
</script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>
<script>
     var intervalo1 = setInterval(function () { $('#modal').load('_api/Modal_dados_pedido.php');}, 500);
</script>

</html>