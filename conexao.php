<?php
$host = "localhost";
$usuario = "root";
$senha= "";
$bd ="db_yinv_co";

$conexao = new mysqli($host,$usuario,$senha,$bd);
if ($conexao->connect_errno){
    echo "falhou" . $conexao->connect_errno;
}
?>