<?php

//CONEXAÕ COM MYSQLI
/*
$conexion = mysqli_connect("mysql01.jovemaprendizvivario.hospedagemdesites.ws","jovemaprendizv","gustyle1980","jovemaprendizv");
//$conexion = mysqli_connect("localhost","root","","cadastro");
$el_continente = $_POST['continente'];

$query = $conexion->query("SELECT * FROM cidades WHERE cd_uf = $el_continente");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{                                       //referencia value                //linha com a cidade
	echo '<option value="' . $row['cd_uf']. '">' . utf8_encode($row['ds_cidade_nome']) . '</option>' . "\n";
}
*/

//CONECÃO COM MSQL
// aqui conexao
$host="localhost";
$user="root";
$pass="";
$dbname="cadastro";

$conexao=  @mysql_connect($host, $user, $pass)  or die('erro na conexão');
$selectdb= mysql_select_db($dbname) or die('Erro na conexão');


$el_continente = $_POST['estado'];

$sql_cidades = "SELECT * FROM cidades WHERE estados_cod_estados = $el_continente";



echo '<option value="0">Seleccione</option>';
$cidades = mysql_query($sql_cidades);
while($row_cidades = mysql_fetch_assoc($cidades)){

	echo '<option value="'.$row_cidades['cod_cidades'].'">'. $row_cidades['nome'] .'</option>';
}


?>