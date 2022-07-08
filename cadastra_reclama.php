<?php 
echo '<pre>';
print_r ($_POST);
echo '</pre>';

$titulo = $_POST['titulo'];
$motivo = $_POST['motivo'];
$descricao = $_POST['descricao'];
echo $titulo, $motivo, $descricao;
?>