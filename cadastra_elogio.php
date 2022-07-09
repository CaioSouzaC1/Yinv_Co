<?php
require "validador.php";

$tituloElogio = str_replace("&", "--",$_POST['titulo']);
$aspectoElogio = str_replace("&", "--",$_POST['aspecto']);
$observacaoElogio = str_replace("&", "--",$_POST['observacao']);

$texto = $tituloElogio ." & ". $aspectoElogio ." & ". $observacaoElogio . PHP_EOL;
$arquivoElogio = fopen('arquivoElogio.txt', 'a');    
fwrite($arquivoElogio, $texto);
fclose($arquivoElogio);
header('Location: consulta_elogio.php');

?>