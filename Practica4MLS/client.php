<?php
require_once "lib/nusoap.php";
$CLIENTE = new nusoap_client("http://localhost/Practica4MLS/server.php");

$ERROR = $CLIENTE->getError();
if ($ERROR)
{
    echo "<h2>constructor error</h2><pre>".$ERROR."</pre>";
}
$RESULT = $CLIENTE->call("getFrutas", array("datos" => "Frutas"));
if ($CLIENTE->fault)
{
    echo "<h2>Fault</h2><pre>";
    print_r($RESULT);
    echo "</pre>";
}
else
{
    $ERROR = $CLIENTE->getError();
    if ($ERROR)
    {
        echo "<h2>Error</h2><pre>".$ERROR."</pre>";
    }
    else
    {
        echo "<h2>Frutas</h2><pre>";
        echo $RESULT;
        echo "</pre>";
    }
}
?>
