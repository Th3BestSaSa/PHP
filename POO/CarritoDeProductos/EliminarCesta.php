<?php
require_once "Producto.php";
session_start();

// Limpiar sesión
unset($_SESSION["cesta"]);

// Borrar persistencia en disco
if (file_exists("cesta.json")) { //comprueba si existe
    unlink("cesta.json"); // Función de PHP para borrar archivos físicos
}

header("Location: verCesta.php");
exit();
