<?php 
$hobbiesSeleccionados = $_POST['hobbies'] ?? [];

function comprobarEleccion($hobbiesSeleccionados){
    if(count($hobbiesSeleccionados) == 0){
        echo "No se ha seleccionado ningún hobby";
    } else {
        echo "<ul>";
        foreach($hobbiesSeleccionados as $hobby){
            echo "<li>$hobby</li>";
        }
        echo "</ul>";
    }
}

comprobarEleccion($hobbiesSeleccionados);

?>
