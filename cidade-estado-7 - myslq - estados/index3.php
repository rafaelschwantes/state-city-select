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
    <script>
        $(function(){

            // Lista de Continentes
            $.post( './api-estado-cidade/api-estados.php' ).done( function(respuesta)
            {
                $( '#estados' ).html( respuesta );
            });

            // lista de Cidades
            $('#estados').change(function()
            {
                var el_continente = $(this).val();

                // Lista de Paises
                $.post( './api-estado-cidade/api-cidades.php', { estado: el_continente} ).done( function( respuesta )
                {
                    $( '#cidades' ).html( respuesta );
                });
            });

            /* Lista de Ciudades
            /$( '#cidades' ).change( function()
            {
                var pais = $(this).children('option:selected').html();
                alert( 'Lista de Ciudades de ' + pais );
            });*/

        })
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