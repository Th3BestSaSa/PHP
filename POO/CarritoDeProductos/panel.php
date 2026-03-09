<?php

declare(strict_types=1);
require_once "Usuario.php";  // Orden importante, antes de session_start
require_once "Producto.php";  // Orden importante, antes de session_star
session_start();
require_once "productos.php";

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<h2>Bienvenido, <?php echo $_SESSION["usuario"]->getNombre(); ?></h2>


<h3>Catálogo de Productos</h3>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acción</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?php echo $producto->getNombre(); ?></td>
            <td><?php echo $producto->getPrecio(); ?>€</td>

            <td><a href="annadirAlCarrito.php?id=<?= $producto->getCodigo(); ?>">Añadir a la cesta</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="verCesta.php">Ver mi cesta</a> |
<a href="logout.php">Cerrar sesión</a> |
<a href="EliminarCesta.php">Borrar mi cesta</a>