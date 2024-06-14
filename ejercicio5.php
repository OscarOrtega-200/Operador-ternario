<?php
$edad = readline("ingrese su edad: ");
$licencia = readline("¿tienes licencia de conducir?:");
if ($edad >=18){
    $edadylicencia = ($licencia == "si")? "puedes conducir" : "debes conseguir licencia de conducción"; 

}else{
    $edadylicencia = ($edad <18). "no puedes conducir" ;
}
 echo "$edadylicencia";

?>