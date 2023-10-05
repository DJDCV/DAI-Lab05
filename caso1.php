<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Sueldo de Vendedor</title>
</head>
<body>
    <form method="post" action="">
        <label for="ventas">Importe Total Vendido del Mes (S/.):</label>
        <input type="text" name="ventas" required><br>

        <label for="hijos">Cantidad de Hijos en Edad Escolar:</label>
        <input type="text" name="hijos" required><br>

        <input type="submit" value="Calcular Sueldo">
    </form>
    <?php
        $ventas = $_POST["ventas"];
        $hijos = $_POST["hijos"];
    
        $comision = $ventas * 0.075;
        $bonificacion = $hijos * 50;
        $sueldoBasico = 600;
        $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
        $descuento = $sueldoBruto * 0.11;
        $sueldoNeto = $sueldoBruto - $descuento;
    
        echo "La comisión a recibir es de : ".$comision."<br>";
        echo "La bonificación es de : ".$bonificacion."<br>";
        echo "El Sueldo Bruto es de: ".$sueldoBruto."<br>";
        echo "El descuento es de : ".$descuento."<br>";
        echo "El Sueldo neto es de : ".$sueldoNeto."<br>";
    ?>
</body>
</html>