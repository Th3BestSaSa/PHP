<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <style>
        table { border-collapse: collapse; width: 100%; text-align: center; font-family: sans-serif; }
        th, td { border: 1px solid #000; padding: 10px; }
        h2 { text-align: center; }
    </style>
</head>
<body>

<h2>Productos con stock disponible</h2>

<?php
$productos = [
    ["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
    ["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
    ["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
    ["nombre" => "Gorra", "precio" => 12.0, "stock" => 20],
];
?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>

    <?php
    foreach ($productos as $producto) {
        if ($producto["stock"] > 0) {
            echo "<tr>";
            echo "<td>{$producto['nombre']}</td>";
            echo "<td>{$producto['precio']}</td>";
            echo "<td>{$producto['stock']}</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>