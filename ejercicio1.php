<?php
$cantidad = readline("infrese cuntas camisas desea comprar:");
echo "cantidad de camisas compradas : $cantidad \n";
$precio = 30000;
$preciototal = ($cantidad * $precio);
echo "precio de la compra: $precio \n";
$descuento = ($cantidad >=3)? 0.20 : 0.10;
$descuentototal = $preciototal ($preciototal + $descuento);
echo "se aplico un descuento y el valor de su compra es de: $descuentototal\n";
?>
