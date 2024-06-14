<?php
//se ingresa la cantidad de camisas que se desea comprar
$cantidad = readline("ingrese cuantas camisas desea comprar:");
echo "cantidad de camisas compradas : $cantidad \n";
$precio = 30000;
//se calcula el valor de la compra
$preciototal = ($cantidad * $precio);
echo "precio de la compra: $preciototal \n";
//se aplica un descuento por la compra de 3 o mas camisas
$descuento = ($cantidad >=3)? 0.20 : 0.10;
$descuentototal = $preciototal - ($preciototal * $descuento);
// se muestra el valor total de la compra con el respectivo descuento
echo "se aplico un descuento y el valor de su compra es de: $descuentototal\n";
?>
