<?php
//encerrando a sessao
session_start();
session_unset();
session_destroy();
header("Location: /projeto_fcamara_2021/index.html");
?>