<?php


//CONEXÃO MYSQL
include '../controlers/connect-mysql.php';


$sel_estado = "SELECT * FROM estados";
echo '<option value="0">Seleccione</option>';

$qr_estado = mysql_query($sel_estado);



while ($row_estado = mysql_fetch_assoc($qr_estado)) {
        echo '<option value="' . $row_estado['cod_estados'] . '">' . $row_estado['sigla'] . '</option>' . "\n";
}

?>