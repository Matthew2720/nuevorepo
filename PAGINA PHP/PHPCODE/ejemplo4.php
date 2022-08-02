<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $materia=$_POST['materia'];
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $contador=0;
    $contador += $n1 + $n2 + $n3;
    $promedio = $contador / 3;

    if($n1 >= 0 and $n2 >= 0 and $n3 >= 0 and $n1 <= 5 and $n2 <= 5 and $n3 <= 5){
        if($promedio > 4){
            $def = "APROBADO";
        }else{
            $def = "REPROBADO";
        }
        print "El estudiante $nombre de codigo $codigo, curso la materia $materia con un resultado de $def NOTA FINAL $promedio";
    }else{
        print "No se puede calcular";
    }
    ?>
</body>
</html>