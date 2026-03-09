<html>
    <body>
        <?php
            $alumnos = [
                    ["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
                    ["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
                    ["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
                    ["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
            ];

            $mejorAlumno = $alumnos[0];
            foreach($alumnos as $alumno){
                if($alumno["nota"]>$mejorAlumno["nota"]){
                    $mejorAlumno = $alumno;
                }
            }
            echo"El alumno con la nota más alta es ".$mejorAlumno['nombre']."<br>";

            $suma = 0;
            foreach($alumnos as $alumno){
                $suma += $alumno["nota"];
            }
            $media = $suma/ count($alumnos);
            echo "La nota media es $media <br>";

            $edadLimite = 19;
            echo "Alumnos mayores de $edadLimite años<br>";
            foreach($alumnos as $alumno){
                if($alumno["edad"]>$edadLimite){
                    echo $alumno["nombre"]."<br>";
                }
            }

            usort($alumnos, function($a, $b) {
                return $b["nota"] <=> $a["nota"];
            });

            echo "Alumnos ordenados por nota (de mayor a menor):<br>";
            foreach ($alumnos as $alumno) {
                echo $alumno["nombre"] . " - Nota: " . $alumno["nota"] . "<br>";
            }

        ?>
        <?php
            function esPar($numero) {
                if ($numero % 2 == 0) {
                    echo "El número es par<br>"; 
                } else {
                    echo "El número es impar<br>";
                }
            }
        ?>

        <h2>Introduce un número</h2>
        <form action="Ejercicio2.php" method="POST">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" required>
            <br><br>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            if($_POST['numero']){
                $numeroRecibido = $_POST['numero'];
            }
            
            if($numeroRecibido != null){
                esPar($numeroRecibido);
            }else{
                echo"No se ha introducido ningún número";
            }
            
        ?>
    </body>
</html>