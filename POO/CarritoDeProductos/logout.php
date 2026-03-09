<?php
declare(strict_types=1);
session_start();
session_unset();      // Limpia las variables
session_destroy();    // Destruye la sesión
header("Location: login.php");
exit;

