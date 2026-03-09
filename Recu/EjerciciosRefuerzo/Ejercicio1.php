<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            border: 1px solid black;
            padding: 6px;
            text-align: center;
            width: 40px;
        }
    </style>
</head>
<body>

<h1>Formulario</h1>

<form method="post" action="">
    <input type="number" name="numero" min="1" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_POST["numero"])) {

    $numero = $_POST["numero"];

    echo "<table><tr>";

    for ($i = 1; $i <= $numero; $i++) {
        echo "<td>$i</td>";

        if ($i % 10 == 0) {
            echo "</tr><tr>";
        }
    }

    echo "</tr></table>";
}
?>

</body>
</html>
