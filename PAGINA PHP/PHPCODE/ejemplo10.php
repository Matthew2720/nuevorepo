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
    $n = $_POST['n'];

    $a=0;
    $b=1;
    $c=0;

    for($i=0;$i<$n;$i++){
        if($i<$n-1){
            print "$a,";
            $c=$a+$b;
            $a=$b;
            $b=$c;
        }
        else
        {
            print "$a"
        }
    }
    ?>
</body>
</html>