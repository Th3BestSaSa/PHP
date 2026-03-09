<?php
// --- CONFIGURACIÓN DE CONSTANTES ---
define("INICIO", 1);
define("FIN", 1000);
define("MULTIPLO_SI", 5);
define("MULTIPLO_NO", 4);
define("COLUMNAS", 7);
define("COLOR_1", "#FFFF00"); // Amarillo
define("COLOR_2", "#ADD8E6"); // Azul claro
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Filtrados</title>
    <style>
        table { border-collapse: collapse; width: 100%; text-align: center; font-family: sans-serif; }
        td { border: 1px solid #000; padding: 10px; }
        h1 { text-align: center; }
    </style>
</head>
<body>

    <h1>Números entre 1 y 1000 múltiplos de 5 y 4</h1>

    <table>
        <tr>
            <?php
            $contadorCeldas = 0;

            for ($i = INICIO; $i <= FIN; $i++) {
                // Lógica: Múltiplo de 5 (resto 0) Y NO múltiplo de 4 (resto diferente de 0)
                if ($i % MULTIPLO_SI == 0 && $i % MULTIPLO_NO != 0) {
                    
                    // Alternar color basado en el contador total de celdas impresas
                    $bgColor = ($contadorCeldas % 2 == 0) ? COLOR_1 : COLOR_2;

                    // Si ya imprimimos el número de columnas permitido, cerramos fila y abrimos otra
                    if ($contadorCeldas > 0 && $contadorCeldas % COLUMNAS == 0) {
                        echo "</tr><tr>";
                    }

                    echo "<td style='background-color: $bgColor;'>$i</td>";
                    $contadorCeldas++;
                }
            }

            // Rellenar celdas vacías al final si la última fila no está completa
            while ($contadorCeldas % COLUMNAS != 0) {
                echo "<td></td>";
                $contadorCeldas++;
            }
            ?>
        </tr>
    </table>

</body>
</html>