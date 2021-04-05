<?php
require __DIR__ . "/../vendor/autoload.php";
$user = new \_api\Classes\Class_Escola();
$EscolaDao = new \_api\Classes\DaoPedido();

if(isset($_POST['id_escola']) && !empty($_POST['id_escola'])){
    $escola = $_POST["id_escola"];

    $user->setINEP($escola);

    $cont = 0;
    $array = [];
    $EscolaDao->readPedidosEscola($user);
    $cont = 0;
    foreach($EscolaDao->readPedidosEscola($user) as $escola):
?>
        <tr>
            <form method="post" id="<?php echo "ajax_form".$cont ?>">
                <td>[<?php echo $escola['cd_pedido'] ?>]</td>
                <input type="hidden" name="pedido" value="<?php echo $escola['cd_pedido'] ?>">
                <td>03/04</td>
                <td><button onclick="openModal()">ver +</button></td>
                                                    
            </form>
                        
            
        </tr>
        <script type="text/javascript">
            jQuery('document').ready(function() {
                jQuery('<?php echo "#ajax_form".$cont ?>').submit(function() {
                    var dados = jQuery(this).serialize();
                    //aqui voce pega o conteudo do atributo action do form
                                
                    jQuery.ajax({
                    type: "POST",
                    url: "_api/Modal_dados_pedido.php",
                    data: dados,
                    success: function(response) {
                    //'response' é a resposta do servidor
                                    
                        }
                    });

                    return false;
                });
            });
        </script>
<?php        
    $cont++;
    endforeach;
}


?>

