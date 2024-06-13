<?php
$largo = readline("ingrese el largo del terreno en metros: ");
$ancho = readline("ingrese el ancho del terreno ");
$areadelterreno = $largo * $ancho;
$areatotal = ($areadelterreno >= 1000) ? "el terreno es adecuado para cultivos extensos." :"el terreno es adecuado para cultivos de jardin o huertos. ";
echo $areatotal;
?>