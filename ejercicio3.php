<?php
// se ingresan las dimenciones del terreno
$largo = readline("ingrese el largo del terreno en metros: ");
$ancho = readline("ingrese el ancho del terreno ");
// se calcula el area del terreno
$areadelterreno = $largo * $ancho;
//si el area es mayor a 1000 metros se ejecuta el primermensaje delo contrario el segundo mensaje
$areatotal = ($areadelterreno >= 1000) ? "el terreno es adecuado para cultivos extensos." :"el terreno es adecuado para cultivos de jardin o huertos. ";
// se muestra el mensaje que identifica si el terreno es adecuado para cultivos extensos o si es para jardin o huertos
echo $areatotal;
?>