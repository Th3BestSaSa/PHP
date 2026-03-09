<?php

declare(strict_types=1);
require_once "Producto.php";
session_start();

$ruta = "cesta.json";

// Recuperación: Si el archivo existe, leemos el texto y lo convertimos en Array 
if (file_exists($ruta)) {
    $contenido = file_get_contents($ruta);
    $_SESSION["cesta"] = json_decode($contenido, true); // Convertimos JSON a Array 
}

echo "<h2>Tu Cesta de la Compra (Persistente)</h2>";

if (empty($_SESSION["cesta"])) {
    echo "<p>La cesta está vacía.</p>";
} else {
    echo "<table border='1'><tr><th>Producto</th><th>Precio</th></tr>";
    $total = 0;
    foreach ($_SESSION["cesta"] as $p) {
        // Accedemos como array asociativo [cite: 152, 158]
        echo "<tr><td>{$p['nombre']}</td><td>{$p['precio']} €</td></tr>";
        $total += $p['precio'];
    }
    echo "</table>";
    echo "<h3>Total: $total €</h3>";
}
?>
<br><a href="panel.php">Volver al catálogo</a>