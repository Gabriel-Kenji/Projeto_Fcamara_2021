<?php
require __DIR__ . "/../vendor/autoload.php";
session_start(); 
    $escola = new \_api\Classes\Class_Escolas();

    
    function get_endereco($cep){
    // formatar o cep removendo caracteres nao numericos
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
    }
    $cepp = $_POST['cep'];
    $cepp = $cepp[0].$cepp[1].$cepp[2].$cepp[3].$cepp[4].$cepp[6].$cepp[7].$cepp[8];
    $endereco = get_endereco($cepp); 
    //echo $endereco->cep; 
    // echo $endereco->logradouro;
    $bairro = $endereco->bairro;
    $escola->setCidade($endereco->localidade); 
    $escola->setUf($endereco->uf);

    

    $CepDao = new \_api\Classes\DaoCep();
    $CepDao->read($escola);

    if($CepDao->read($escola) == []){
        
        echo "erro"; 
    }
    else
    {
        $i=0;
        foreach($CepDao->read($escola) as $endereco):
            $bairroBD = $endereco['nm_bairro'];
            
            
            if($i == 0)
            {
                echo "Essas são as Escolas no seu Bairro";?>
                </br></br>
                <?php
                $i=+1;
            }

            if($bairroBD == $bairro)
            {


                echo $endereco['nm_escola'];?> <br><?php
                echo $endereco['nm_endereco'];?> <br><?php
                echo $endereco['nm_cidade'];?> <br><?php
                echo $endereco['nm_bairro'];?> <br><?php
                echo $endereco['sg_uf'];?> <br><?php
            }
            
        endforeach;
        $i=0;
        $is=0;
        foreach($CepDao->read($escola) as $endereco):
            $bairroBD = $endereco['nm_bairro'];
            


            if($bairroBD != $bairro)
            {
                
                if($i == 0)
                {?>
                    </br>
                    <?php echo "Outras escolas na sua Cidade";?>
                    </br></br>
                    <?php
                }

                echo $endereco['nm_escola'];?> <br><?php
                echo $endereco['nm_endereco'];?> <br><?php
                echo $endereco['nm_cidade'];?> <br><?php
                echo $endereco['nm_bairro'];?> <br><?php
                echo $endereco['sg_uf'];?> <br><?php
                $i=+1;
            }
            
            if($i == 0)
            {?>
                </br>
                <?php echo "Não existem mais escolas na sua Cidade";?>
                </br></br>
                <?php
            }
            $i=+1;
        endforeach;
       
    }
    
    
    
    
        
?>