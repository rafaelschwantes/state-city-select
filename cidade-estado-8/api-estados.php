<?php

//CONEXÃO COM O BANCO DE DADOS VIA FTP//
/*
$conexion = mysqli_connect("mysql01.jovemaprendizvivario.hospedagemdesites.ws","jovemaprendizv","gustyle1980","jovemaprendizv");
$query = $conexion->query("SELECT * FROM uf");
echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
        echo '<option value="' . $row['cd_uf']. '">' . $row['ds_uf_sigla'] . '</option>' . "\n";

    
}
*/

//CONEXÃO MYSQL
// aqui conexao
$host="mysql01.jovemaprendizvivario.hospedagemdesites.ws";
$user="jovemaprendizv";
$pass="gustyle1980";
$dbname="jovemaprendizv";

$conexao=  @mysql_connect($host, $user, $pass)  or die('erro na conexão');
$selectdb= mysql_select_db($dbname) or die('Erro na conexão');


$sel_estado = "SELECT * FROM uf";
echo '<option value="0">Seleccione</option>';

$qr_estado = mysql_query($sel_estado);



while ($row_estado = mysql_fetch_assoc($qr_estado)) {
        echo '<option value="' . $row_estado['cd_uf'] . '">' . $row_estado['ds_uf_sigla'] . '</option>' . "\n";
}

?>