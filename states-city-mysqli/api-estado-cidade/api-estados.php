<?php
//CONEXÃO MYSQLi
include '../controlers/connect-mysqli.php';


$query = $conexion->query("SELECT * FROM estados");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
        echo '<option value="' . $row['cod_estados']. '">' . $row['sigla'] . '</option>' . "\n";

    
}


//CONEXÃO MYSQL
/* aqui conexao
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
*/
?>