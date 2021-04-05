<?php

require __DIR__ . "/../vendor/autoload.php";

$userDoacao = new \_api\Classes\Class_Doacao();
$DaoDoacao = new \_api\Classes\DaoDoacao();

$CPF = $_SESSION['Doador'];
$userDoacao->setCPF($CPF);
$DaoDoacao->readListaPedidos($userDoacao);
foreach($DaoDoacao->readListaPedidos($userDoacao) as $doacao){?>
    <tr style="height: 53px;">
        <td class="u-table-cell"><?php echo $doacao['nm_material']; ?></td>
        <td class="u-table-cell"><?php echo $doacao['ds_quantidade']; ?></td>
        <td class="u-table-cell"><?php echo $doacao['nm_escola']; ?></td>
    </tr>

<?php 
}
?>