<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Impresion serie fibonacci, se listan de a 10 hasta la proxima linea</h3>
    <?php
        $n = $_POST['n'];
        $a=0;$b=1;
        for ($i=0; $i <$n ; $i++) {
            switch ($i) {
                case '0':
                    print "0,";
                    break;
                
                case '1':
                    print "1,";
                    break;
            }
            if($i>1){
            $c=$a+$b;
            print "$c,";
            $a=$b;
            $b=$c;
                if(($i+1) % 10 == 0){
                    print "</br>";
                }    
            }
        }
    ?>
</body>
</html>