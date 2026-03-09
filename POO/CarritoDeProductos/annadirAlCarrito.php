<?php

declare(strict_types=1);
require_once "Producto.php";
session_start();
require_once "productos.php";

$id = $_GET["id"] ?? "";

if (isset($productos[$id])) {
    if (!isset($_SESSION["cesta"])) {
        $_SESSION["cesta"] = [];
    }
    $_SESSION["cesta"][] = $productos[$id];

    // --- PERSISTENCIA ---
    // 1. Serialización: Convertimos el array de la sesión en un String JSON [cite: 41, 45]
    $infoEnJson = json_encode($_SESSION["cesta"], JSON_PRETTY_PRINT);

    // 2. Almacenamiento: Guardamos el texto en el disco duro [cite: 42, 45]
    file_put_contents("cesta.json", $infoEnJson);
}

header("Location: panel.php");
exit;
