<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Jugando a los dados</h1>
    <?php

    $num1=rand(1,6);
    $num2=rand(1,6);
    $num3=rand(1,6);
    $num4=rand(1,6);
    
    echo "<img src='imagenes/$num1.svg'>";
    echo "<img src='imagenes/$num2.svg'>";
    echo "<img src='imagenes/$num3.svg'>";
    echo "<img src='imagenes/$num4.svg'>";
   $suma1 = $num1 + $num2;
    $suma2 = $num3 + $num4;
    if ($num1==$num2) {
        echo "Pareja del jugador 1" ;
    } else if ($num3==$num4) {
        echo "Pareja del jugador 2" ;
    }else if($suma1>$suma2){
             echo "El jugador uno gana" ;
    }else{
         echo "El jugador dos gana" ;
    }
    ?>
</body>
</body>
