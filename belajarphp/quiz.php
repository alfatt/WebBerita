<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budi</title>
</head>
<body>
    <?php
        $nama="Budi";
        $uang=60000;
        $aqua=3000;
        $mie=2500;
        $saus=5000;
        $beli=((2*$aqua)+(3*$mie)+(1*$saus));
        $kembali=($uang-$beli);
        echo"Uang yang harus dibayar $nama adalah : Rp. $beli";
        echo"<br>Uang Kembalian $nama adalah : Rp. $kembali"
    ?>
    
</body>
</html>