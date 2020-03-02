<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMAR</title>
</head>
<body>
<h2>ENCONTRAR</h2>
<?php
    $palabra=["emprendedor","osl,empren,tayu,lola,dedor,ola"];
    $expres=explode(",",$palabra[1]);
    echo "<h4>( ".$palabra[0]." )</h4>";
    $valor="sin_concidencia";

    for($i=0;$i<count($expres);$i++){
        echo $expres[$i]." | ";
        for($s=0;$s<count($expres);$s++){
            if($expres[$i].$expres[$s]==$palabra[0]){
                $valor=$palabra[0];
            }
        }
    }
    echo "<br><h4>".$valor."</h4>";
    ?>
</body>
</html>
