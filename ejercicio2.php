<?php
$producto = (int) readline("ingrese la cantidad de productos comprados: ");
$precio = (float) readline("ingrese el precio de cada producto: ");
$preciodelacompra = $producto * $precio;
echo "el precio total de su compra es: $preciodelacompra\n";

$descuento = ($producto >= 10)? $preciodelacompra * 0.10 : 0;
$preciototaldelacompra = $preciodelacompra - $descuento;

echo "se aplico un descuento y el valor de su compra es de: $preciototaldelacompra\n";
?>