<?php
    if(isset($_POST['OPCAO']) && !empty($_POST['OPCAO']))
    {
        $op = $_POST['OPCAO'];

        if($op == "op1")
        {
            header("Location: ../Cadastro-Aluno.php");
        }elseif($op == "op2")
        {
            header("Location: ../Cadastro-Doador.html");
        }elseif($op == "op3")
        {
            header("Location: ../cadastro-escola.html");
        }
    }
?>