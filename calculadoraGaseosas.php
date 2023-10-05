<?php
    $precioActual = $_POST["precio_actual"];
    $cantidad = $_POST["cantidad"];

    $nuevoPrecio = $precioActual - ($precioActual * 0.05);
    $importeCompra = $nuevoPrecio * $cantidad;
    $descuento = $importeCompra * 0.07;
    $importePagar = $importeCompra - $descuento;
    $caramelosObsequiados = $cantidad * 2;

    echo "Nuevo Precio de la Gaseosa: S/. " .$nuevoPrecio."<br>";
    echo "Importe de la Compra: S/. " .$importeCompra."<br>";
    echo "Importe del Descuento: S/. " .$descuento."<br>";
    echo "Importe a Pagar: S/. " .$importePagar."<br>";
    echo "Caramelos Obsequiados: " .$caramelosObsequiados ."<br>";
?>