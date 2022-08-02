<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="ejemplo3">
    <?php
        $edad=$_POST['edad'];
        $estatura=$_POST['estatura'];
        $peso=$_POST['peso'];

        if($edad <=18 & $peso <=80 & $estatura >=180){
            print "Has sido ACEPTADO";
        }else{
            print "Has sido RECHAZADO";
        }

    ?>
</body>
</html>