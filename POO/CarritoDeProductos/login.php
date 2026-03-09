<?php
declare(strict_types=1);
require_once "Usuario.php"; // Necesario antes de session_start si guardamos el objeto
session_start();
require_once "usuarios.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userIn = htmlspecialchars($_POST["user"]);
    $passIn = htmlspecialchars($_POST["pass"]);
    $encontrado = false;

    foreach ($usuarios as $usu) {
        if ($usu->getNombre() === $userIn && $usu->validarPassword($passIn)) {
            // Guardamos el objeto usuario en la sesión
            $_SESSION["usuario"] = $usu;
            $encontrado = true;
            header("Location: panel.php");
            exit;
        }
    }

    if (!$encontrado) {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<form method="POST" action="login.php">
    Usuario: <input type="text" name="user"><br>
    Contraseña: <input type="password" name="pass"><br>
    <button type="submit">Iniciar sesión</button>
</form>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>