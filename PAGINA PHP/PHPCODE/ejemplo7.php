<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Impresion! </h3><br>
    <?php
    $h=0;$m=0;$s=0;

    for($h=0;$h <=23;$h++)
    { "<br><br>";
        for ($m=0; $m <=59 ; $m++) 
        { "<br><br>";
            for ($s=0; $s<=59 ; $s++)
            {
                print "$h : $m : $s ||";
            }
            $s=1;
        }
        $m=1;
    }
    ?>
</body>
</html>