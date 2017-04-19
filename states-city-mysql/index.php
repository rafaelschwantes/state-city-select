<?php
/* este programa visa criar uma dependencia entre os selects estado e cidade
*  este programa está com dois modelos de conexão: mysql e mysqli
 * o arquivo do banco de criação do banco de dados pras cidades e estados estão na pasta
 * 
*/
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Select dependientes o combos dinámicos con php, mysql y jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    
    <script src="api-estado-cidade/function.js"></script>
    <script>

    </script>
</head>
<body>

<h1>Estado - Cidade</h1>

<div>
    <h2>Estados</h2>
    <select name="estados" id="estados">
        <option value="0">Seleccione</option>
    </select>
</div>

<div>
    <h2>Cidades</h2>
    <select name="cidades" id="cidades">
        <option value="0">Seleccione</option>
    </select>
</div>

</body>
</html>