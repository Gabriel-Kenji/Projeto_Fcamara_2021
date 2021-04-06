<?php

require __DIR__ . "/../vendor/autoload.php";

$userDoacao = new \_api\Classes\Class_Doacao();
$DaoDoacao = new \_api\Classes\DaoDoacao();

$CPF = $_SESSION['InepEscola'];
$userDoacao->setCPF($CPF);
$DaoDoacao->readListaDoacaoEscola($userDoacao);
foreach($DaoDoacao->readListaDoacaoEscola($userDoacao) as $doacao){?>
    
    <tr style="height: 50px;">
        <td class="u-table-cell"><?php echo $doacao['cd_RA']; ?></td>
        <td class="u-table-cell"><?php echo $doacao['nm_material']; ?></td>
        <td class="u-table-cell"><?php echo $doacao['ds_quantidade']; ?></td>
        <td class="u-table-cell"><?php echo $doacao['nm_status']; ?></td>
        <td class="u-table-cell">Ver mais</td>
    </tr>

<?php 
}
?>