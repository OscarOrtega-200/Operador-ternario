<?php
//se ingresa los productos a comprar y su respectivo valor
$producto = (int) readline("ingrese la cantidad de productos comprados: ");
$precio = (float) readline("ingrese el precio de cada producto: ");
// se calcula el valor de la compra
$preciodelacompra = $producto * $precio;
echo "el precio total de su compra es: $preciodelacompra\n";
//se realiza el respectivo descuento por compra de 10 productos o mas
$descuento = ($producto >= 10)? $preciodelacompra * 0.10 : 0;
$preciototaldelacompra = $preciodelacompra - $descuento;
// se muestra el valor total de la compra con el descuento aplicado
echo "se aplico un descuento y el valor de su compra es de: $preciototaldelacompra\n";
?>