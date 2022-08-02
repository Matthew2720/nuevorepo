<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PAGINA DE RESULTADOS!!</h1>
    <?php
    $pph=$_POST['pph'];
    $pphe=$_POST['pphe'];
    $ht=$_POST['ht'];

    if($ht > 40){
        $hextras = $ht - 40;
        $ht = 40;

        $bruto= ($ht * $pph)+($hextras * $pphe);
    }else{
        $bruto = $ht * $pph;
    }

    $neto=$bruto-($bruto*0.25);

    print "El salario neto del empleado es $neto";

    

?>
</body>
</html>