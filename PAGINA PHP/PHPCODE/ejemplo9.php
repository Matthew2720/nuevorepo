<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Factorial</h3>
    <?php
        $n = $_POST['n'];
        $contador=1;
        for($i=1;$i<$n;$i++){
            $contador = $contador * $i;
        }

        print "El factorial es $contador"
    ?>
</body>
</html>