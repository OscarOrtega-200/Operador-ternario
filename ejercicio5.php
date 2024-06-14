<?php
//se ingresa la edad y si tiene o no licencia de conduccion
$edad = readline("ingrese su edad: ");
$licencia = readline("¿tienes licencia de conducir?:");
// si la edad es mayor a 18, y la respuesta es si se indica que puede conducir, si no tiene licencia se informa que debe conseguirla
if ($edad >=18){
    $edadylicencia = ($licencia == "si")? "puedes conducir" : "debes conseguir licencia de conducción"; 
// si tiene menos de 18 años de igual manera se informa si tiene  licencia pero asi tenga o no no se le permite conducir
}else{
    $edadylicencia = ($edad <18). "no puedes conducir" ;
}
 echo "$edadylicencia";

?>