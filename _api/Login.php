<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST['usuarios']) && !empty($_POST['usuarios']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['email']) && !empty($_POST['email'])){

    $tipo = $_POST['usuarios'];
    $email = $_POST['email'];
    $psenha = $_POST['senha'];

    if($tipo == "Aluno")
    {
        $Aluno = new \_api\Classes\Class_Aluno();
        $Aluno->setEmail($email);

        $LoginDaoAluno = new \_api\Classes\DaoLogin_Aluno();
        $LoginDaoAluno->read($Aluno);

        if($LoginDaoAluno->read($Aluno) == [])
        {
            $_SESSION['erro_login'] = 1;
            header("Location: ../testlogin.html");
            echo "erro email"; 
        }
        else
        {
            foreach($LoginDaoAluno->read($Aluno) as $loginaluno):
                $senha = $loginaluno['nm_senha'];
                $id = $loginaluno['cd_RA'];
                $nomeuser = $loginaluno['nm_aluno'];
                
            endforeach;
            if($senha == $psenha){
                $_SESSION['RaAluno'] = $id;
                $_SESSION['logado'] = true;
                $_SESSION['nomeuserlogado'] = $nomeuser;
                header("Location: ../home_aluno.php");
                
                
            }
            else
            {
                echo "erro senha";
                $_SESSION['erro_login'] = 2;
                header("Location: ../testlogin.html");
            }
        }
    }
    else
    {
        if($tipo == "Doador")
        {
            $Doador = new \_api\Classes\Class_Doador();
            $Doador->setEmail($email);
            $Doador->setSenha($senha);

            $LoginDaoDoador = new \_api\Classes\DaoLogin_Doador();
            $LoginDaoDoador->read($Doador);

            if($LoginDaoDoador->read($Doador) == [])
            {
                $_SESSION['erro_login'] = 1;
                //header("Location: ../testlogin.html");
                echo "erro email doador"; 
            }
            else
            {
                foreach($LoginDaoDoador->read($Doador) as $loginDoador):
                    $senha = $loginDoador['nm_senha'];
                    $id = $loginDoador['cd_RA'];
                    $nomeuser = $loginDoador['nm_aluno'];
                    
                endforeach;
                if($senha == $psenha)
                {
                    $_SESSION['Doador'] = $id;
                    $_SESSION['logado'] = true;
                    $_SESSION['nomeuserlogado'] = $nomeuser;
                    header("Location: ../home.php");
                    
                    
                }
                else
                {
                    echo "erro senha doador";
                    $_SESSION['erro_login'] = 2;
                    //header("Location: ../testlogin.html");
                }
            }


        }
        else
        {
            if($tipo == "Escola")
            {
                $Escola = new \_api\Classes\Class_Escola();
                $Escola->setEmail($email);


                $LoginDaoEscola = new \_api\Classes\DaoLogin_Escola();
                $LoginDaoEscola->read($Escola);

                if($LoginDaoEscola->read($Escola) == [])
                {
                    $_SESSION['erro_login'] = 1;
                    //header("Location: ../testlogin.html");
                    echo "erro email Escola"; 
                }
                else
                {
                    foreach($LoginDaoEscola->read($Escola) as $loginEscola):
                        $senha = $loginEscola['nm_senha'];
                        $id = $loginEscola['cd_RA'];
                        $nomeuser = $loginEscola['nm_aluno'];
                        
                    endforeach;
                    if($senha == $psenha)
                    {
                        $_SESSION['InepEscola'] = $id;
                        $_SESSION['logado'] = true;
                        $_SESSION['nomeuserlogado'] = $nomeuser;    
                        header("Location: ../home_escola.php");
                        
                    }
                    else
                    {
                        echo "erro senha Escola";
                        $_SESSION['erro_login'] = 2;
                        //header("Location: ../testlogin.html");
                    }
                }
            }
        }
    }
}
        
?>