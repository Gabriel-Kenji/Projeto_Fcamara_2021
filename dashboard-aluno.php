<?php
session_start(); 
//Verificacao e Coletando dados
$id = $_SESSION['RaAluno'];
if(!isset($_SESSION['RaAluno'])){
    header("Location: /projeto_fcamara_2021/homepage.html");
}

include("_api/Select_Material.php");

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>aFetivo - Aluno</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/dashboard-aluno.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
</head>

<body>
    <header class="u-clearfix u-header u-header" id="sec-8ab9">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a class="u-image u-logo u-image-1">
                <img src="images/logoAfetivo.png" class="">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
                    <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg>
              <use xlink:href="#menu-hamburger"></use>
            </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/Homepage.html#carousel_f056"
                                data-page-id="303762" style="padding: 12px 20px;">Dicas</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/Homepage.html#carousel_79bd"
                                data-page-id="303762" style="padding: 12px 20px;">Como funciona</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/Homepage.html#carousel_119d"
                                data-page-id="303762" style="padding: 12px 20px;">Contate-nos</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 12px 20px;">Sair</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Homepage.html#carousel_f056" data-page-id="303762" style="padding: 12px 20px;">Dicas</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Homepage.html#carousel_79bd" data-page-id="303762" style="padding: 12px 20px;">Como funciona</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Homepage.html#carousel_119d" data-page-id="303762" style="padding: 12px 20px;">Contate-nos</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 12px 20px;">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-custom-color-3 u-section-1" id="sec-5665">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-left u-border-3 u-border-white u-container-style u-expanded-width u-group u-radius-30 u-shape-round u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h1 class="u-heading-font u-text u-title u-text-1">Bem vin​do, [<?php echo $_SESSION['nomeuserlogado']; ?>] </h1>
                    <a href="selecao-materiais.php" class="u-active-palette-1-dark-2 u-btn u-btn-round u-button-style u-custom-color-4 u-hover-palette-1-light-2 u-radius-30 u-text-body-color u-btn-1">solicitar uma doação</a>
                    <a href="#" class="u-active-palette-1-dark-2 u-btn u-btn-round u-button-style u-custom-color-4 u-hover-palette-1-light-2 u-radius-30 u-text-body-color u-btn-2" style="
                    top: 6px;
                ">acompanhe sua solicitação</a>
                    <h4 class="u-text u-text-2">Histórico de doaç​ões recebidas </h4>
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
                                <tr style="height: 53px;">
                                    <td class="u-table-cell">Caderno</td>
                                    <td class="u-table-cell">24/03/2021</td>
                                    <td class="u-table-cell">20213265485</td>
                                    <td class="u-table-cell">24/05/2021</td>
                                    <td class="u-table-cell">EEEM Agenor Roris</td>
                                </tr>
                                <tr style="height: 53px;">
                                    <td class="u-table-cell">Caixa de lápis</td>
                                    <td class="u-table-cell">22/02/2021</td>
                                    <td class="u-table-cell">20216598745</td>
                                    <td class="u-table-cell">22/04/2021</td>
                                    <td class="u-table-cell">EEEM Maura Abaurre</td>
                                </tr>
                                <tr style="height: 53px;">
                                    <td class="u-table-cell">Cola</td>
                                    <td class="u-table-cell">23/04/2021</td>
                                    <td class="u-table-cell">20216598745</td>
                                    <td class="u-table-cell">Description</td>
                                    <td class="u-table-cell">EEEM Agenor Roris</td>
                                </tr>
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
</body>

</html>