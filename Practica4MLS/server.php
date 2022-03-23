<?php
require_once "lib/nusoap.php";
function getFrutas($datos)
{
    if ($datos == "Frutas")
    {
        return join(",", array(
            "Manzana",
            "Pera",
            "Uva",
            "Frambueza",
            "Fresa",
            "Cereza"));
    }
    else
    {
        return "no hay Frutas";
    }
}
$SERVER = new soap_server(); //instancia de soap
$SERVER->register("getFrutas"); //metodo o funcion a devolver
if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
    $SERVER->service($HTTP_RAW_POST_DATA);
?>
