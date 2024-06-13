<?php
$cantidad = readline("infrese cuntas camisas desea comprar:");
echo "cantidad de camisas compradas : $cantidad \n";
$precio = 30.000;
$precitotal = ($cantidad * $precio);
echo "precio de la compra: $precio \n";
$descuento = ($cantidad >=3)? 0.2 : 0.1;
$descuentototal = $preciototal - $descuento;
echo "se aplico un descuento y el valor de su compra es de: $descuentototal\n";
?>