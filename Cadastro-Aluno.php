<?php
include("_api/Select_Escolas.php")
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>aFetivo - Cadastro de Aluno</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Cadastro-Aluno.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <!-- <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script> -->
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
                <!-- MENU RESPONSIVO  -->
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/Homepage.html#carousel_607d"
                                data-page-id="303762" style="padding: 12px 20px;">Quem somos nós</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/Homepage.html#carousel_79bd"
                                data-page-id="303762" style="padding: 12px 20px;">Como funciona</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/Homepage.html#carousel_f056"
                                data-page-id="303762" style="padding: 12px 20px;">Dicas</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/Homepage.html#carousel_119d"
                                data-page-id="303762" style="padding: 12px 20px;">Contate-nos</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 12px 20px;">Cadastre-se</a>
                        </li>
                        <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-15 u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 12px 20px;"
                                onclick="closeLogin()">Entrar</a>
                        </li>
                    </ul>
                </div>
                <!-- MENU  -->
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Homepage.html#carousel_607d" data-page-id="303762" style="padding: 12px 20px;">Quem somos nós</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Homepage.html#carousel_79bd" data-page-id="303762" style="padding: 12px 20px;">Como funciona</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Homepage.html#carousel_f056" data-page-id="303762" style="padding: 12px 20px;">Dicas</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Homepage.html#carousel_119d" data-page-id="303762" style="padding: 12px 20px;">Contate-nos</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 12px 20px;">Cadastre-se</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 12px 20px;" onclick="closeLogin()">Entrar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="u-align-left u-clearfix u-custom-color-3 u-section-1" id="carousel_7ef2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-2">
                <div class="u-layout">
                    <div class="u-layout-row" style="">
                        <!-- DIV DA FOTO  -->
                        <div class="u-container-style u-image u-layout-cell u-right-cell u-size-27 u-size-xs-60 u-image-1" src="" data-image-width="1500" data-image-height="1000" style="border-radius: 3% !important;">
                            <div class="u-container-layout u-container-layout-2" src=""></div>
                        </div>
                        <!-- DIV DO FORM -->
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-radius-20 u-shape-round u-size-33 u-size-xs-60 u-white u-layout-cell-2" src="">
                            <div class="u-container-layout u-container-layout-3">
                                <h1 class="u-heading-font u-text u-title u-text-1">
                                    <span style="font-style: normal;">Faça seu cadastro,</span>
                                    <span style="font-weight: 700; font-style: normal;">aluno!</span>
                                </h1>
                                <div class="u-form u-form-1">
                                
                                    <form action="_api/Cadastro_Aluno.php" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical " style="padding: 10px" source="email" name="form-1">
                                        <input type="hidden" id="siteId" name="siteId" value="303755">
                                        <input type="hidden" id="pageId" name="pageId" value="309510">
                                        <div class="u-form-group u-form-name u-form-partition-factor-2">
                                            <label for="name-4a6d" class="u-label u-label-1">Nome</label>
                                            <input type="text" placeholder="Digite seu nome" id="name-4a6d" name="nome" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-1" required>
                                        </div>
                                        <div class="u-form-group u-form-partition-factor-2 u-form-group-2">
                                            <label for="text-b76d" class="u-label u-label-2">Registro de aluno</label>
                                            <input type="text" placeholder="Digite seu RA" id="text-b76d" name="numeroRA" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-2" required maxlength="12">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-4a6d" class="u-label u-label-3">E-mail</label>
                                            <input type="email" placeholder="Digite um e-mail válido" id="email-4a6d" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-3" required>
                                        </div>
                                        <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                                            <label for="text-f465" class="u-label u-label-4">Senha</label>
                                            <input type="text" placeholder="Digite sua Senha" id="text-f465" name="password" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-4" required>
                                        </div>
                                        <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
                                            <label for="text-1a64" class="u-label u-label-5">Confirme a senha</label>
                                            <input type="text" placeholder="Confirme sua senha" id="text-1a64" name="confirm-password" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-5" required>
                                        </div>

                                        <div class="u-form-group u-form-name u-form-partition-factor-2">
                                            <label for="cep" class="u-label u-label-1">CEP</label>
                                            <input type="text" placeholder="Digite seu cep" id="cep" name="cep" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-1" required>
                                        </div>

                                        <div class="u-form-group u-form-name u-form-partition-factor-2">
                                            <label for="uf" class="u-label u-label-1">Estado</label>
                                            <input type="text" placeholder="Digite seu estado (ex.: SP)" id="uf" name="uf" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-1" required style="text-transform:uppercase">
                                        </div>

                                        <div class="u-form-group u-form-name u-form-partition-factor-2">
                                            <label for="cidade" class="u-label u-label-1">Cidade</label>
                                            <input type="text" placeholder="Digite sua cidade" id="cidade" name="cidade" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-1" required>
                                        </div>

                                        <div class="u-form-group u-form-name u-form-partition-factor-2">
                                            <label for="bairro" class="u-label u-label-1">Bairro</label>
                                            <input type="text" placeholder="Digite seu bairro" id="bairro" name="bairro" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-1" required>
                                        </div>

                                        <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-9">
                                            <label for="select-2fdc" class="u-label u-label-9">Selecione sua escola</label>
                                            <div class="u-form-select-wrapper">
                                                <select id="select-2fdc" name="select-escola" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-9" required>
                                                    <option value="Selecione">Selecione</option>
                                                    <?php
                                                        $contz = 0;
                                                        for($i=0 ; $i<=1; $i++ ){
                                                            if(isset($array[$contz]) && !empty($array[$contz])){
                                                                echo $array[$contz][0]. $array[$contz][1] ;
                                                                ?>
                                                                <option value="<?php echo $array[$contz][0] ?>" ><?php echo $array[$contz][1] ?></option><?php
                                                                $contz++;
                                                                $i = 0;
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-10">
                                            <label for="phone-5a25" class="u-label u-label-10">Contatos:</label>
                                            <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="(DDD) XXXXX-XXXX" id="phone-5a25" name="telefone" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-input u-input-rectangle u-white u-input-10"
                                                >
                                        </div>

                                        <div class="u-form-checkbox u-form-group u-form-group-12">
                                            <input type="checkbox" id="checkbox-9e79" name="checkbox-termosUso" value="On" required="required">
                                            <label for="checkbox-9e79" class="u-label u-label-12">
                                        <a class="u-active-none u-border-none u-btn u-button-style u-dialog-link u-hover-none u-none u-text-palette-1-base u-btn-1"
                                        href="#">Li e concordo com os termos de uso.</a>
                                        </label>
                                        </div>
                                        <div class="u-align-center u-form-group u-form-submit">
                                
                                            <input type="submit" value="cadastrar" class="u-active-palette-1-dark-2 u-border-2 u-border-grey-75 u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-2 u-palette-1-dark-3 u-radius-30 u-btn-2">
                                        </div>

                                        <!-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                                        <input type="hidden" value="" name="recaptchaResponse"> -->
                                    </form>
                                </div>
                            </div>
                        </div>
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
</body>

</html>