<?php
    require __DIR__ . "/../vendor/autoload.php";

    $userDoador = new \_api\Classes\Class_Doador();
    $DaoDoador = new \_api\Classes\DaoLogin_Doador();

    $CPF = $_SESSION['Doador'];
    $userDoador->setCPF($CPF);
    $DaoDoador->readCPF($userDoador);
    foreach($DaoDoador->readCPF($userDoador) as $doador){?>
    <h1 class="u-heading-font u-text u-title u-text-1">Bem vin​do, <?php echo  $doador["nm_doador"]; ?> !</h1>
    
<?php
    }
?>