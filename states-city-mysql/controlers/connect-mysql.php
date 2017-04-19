<?php
/**
 * Created by PhpStorm.
 * User: rafaelschwantes
 * Date: 24/03/2017
 * Time: 15:49
 */

$host="localhost";
$user="root";
$pass="";
$dbname="cadastro";

$conexao=  @mysql_connect($host, $user, $pass)  or die('erro na conexão');
$selectdb= mysql_select_db($dbname) or die('Erro na conexão');

?>