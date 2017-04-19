/**
 * Created by rafaelschwantes on 21/03/2017.
 */
$(function(){

    // Lista de Continentes
    $.post( 'api-estados.php' ).done( function(respuesta)
    {
        $( '#continentes' ).html( respuesta );
    });

    // lista de Paises
    $('#continentes').change(function()
    {
        var el_continente = $(this).val();

        // Lista de Paises
        $.post( 'api-cidades.php', { continente: el_continente} ).done( function( respuesta )
        {
            $( '#paises' ).html( respuesta );
        });
    });

    // Lista de Ciudades
    $( '#paises' ).change( function()
    {
        var pais = $(this).children('option:selected').html();
        alert( 'Lista de Ciudades de ' + pais );
    });

})