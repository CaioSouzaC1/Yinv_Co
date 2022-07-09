<?php
require "validador.php";
?>

<?php 
$titulo = str_replace("&", "--",$_POST['titulo']);
$motivo = str_replace("&", "--",$_POST['motivo']);
$descricao = str_replace("&", "--",$_POST['descricao']);
$texto = $_SESSION['id'] ." & ".$titulo ." & ". $motivo ." & ". $descricao . PHP_EOL;
$arquivo = fopen('arquivo.txt', 'a');    
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location: consulta_reclama.php');
?>