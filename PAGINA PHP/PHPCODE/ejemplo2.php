<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="ejemplo2">
<?php
    $l = $_POST['l'];
    $m = $_POST['m'];
    $w = $_POST['w'];
    $j = $_POST['j'];
    $v = $_POST['v'];
    $s = $_POST['s'];
    $d = $_POST['d'];

    $contador=0;

    $contador += $l+$m+$w+$j+$v+$s+$d;

    $promedio = $contador / 7;

    print "el promedio es $promedio \n"; 

    switch ($promedio) {
        case $promedio > 35:
            print "Que semana tan caliente!!!";
            break;

        case $promedio < 15:
            print "Que semana tan fria";
            break;

        case $promedio > 15 and $promedio < 35:
            print "Que clima tan delicioso";
            break;
    }
?>
</body>
</html>

