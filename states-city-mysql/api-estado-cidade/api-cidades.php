<?php

//CONEXÃO MYSQL
include '../controlers/connect-mysql.php';


$el_continente = $_POST['estado'];

$sql_cidades = "SELECT * FROM cidades WHERE estados_cod_estados = $el_continente";



echo '<option value="0">Seleccione</option>';
$cidades = mysql_query($sql_cidades);
while($row_cidades = mysql_fetch_assoc($cidades)){

	echo '<option value="'.$row_cidades['cod_cidades'].'">'. $row_cidades['nome'] .'</option>';
}


?>