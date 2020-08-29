<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan If PHP</title>
</head>
<body>
    <?php
        $quiz=85;
        $tugas=98;
        $uts=75;
        $uas=60;
        $ip="";
        $ket="";
        $nilai_akhir=((0.1*$quiz)+(0.2*$tugas)+(0.3*$uts)+(0.4*$uas));

        if($nilai_akhir>=85){
            $ip='Grade A';
            $ket='Nilai Sangat Memuaskan dan Baik';
        }else if($nilai_akhir>=73){
            $ip='Grade B';
            $ket='Nilai Sangat Memuaskan dan Baik';
        }else if($nilai_akhir>=65){
            $ip='Grade B';
            $ket='Nilai Cukup Baik';
        }else if($nilai_akhir>=50){
            $ip='Grade B';
            $ket='Kamu Harus Ulang';
        }else{
            $ip='Grade E';
            $ket='Kamu DO Tahun Depan';
        }

        echo"IP Anda : $nilai_akhir. $ip. $ket";
    
    
    
    
    ?>
    
</body>
</html>