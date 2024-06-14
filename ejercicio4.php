<?php
//se ingresa el mes para consultar el tipo de siembra que se puede hacer
$estacion = readline("ingrese el mes en el que desea realizar la siembra: ");
// si el mes seleccionado esta en el array aparece el primer mensaje de lo contrario el segundo mensaje
$siembra_adecuada = (in_array($estacion, ["abril", "noviembre"]))? "debe usar la siembra en almacigo." : "debe realizar la siembra directa";
//se muestra el mensaje con el mes consultado y su respectivo tipo de siembra
echo "en el mes de $estacion se $siembra_adecuada "
?>