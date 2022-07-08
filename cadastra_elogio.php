<?php
require "validador.php";
echo '<pre>';
print_r ($_POST);
echo '</pre>';

$tituloElogio = $_POST['titulo'];
$aspectoElogio = $_POST['aspecto'];
$observacaoElogio = $_POST['observacao'];

?>