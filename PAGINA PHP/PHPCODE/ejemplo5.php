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
$llantas=$_POST['llantas'];

 if ($llantas < 5) {
    $precio =30000 * $llantas;
 }elseif ($llantas >= 5 and $llantas <=10) {
    $precio =25000 * $llantas;
 }else {
    $precio = 20000 * $llantas;
 }
 print "Su valor a pagar por $llantas llantas es de: $precio";

?>
</body>
</html>