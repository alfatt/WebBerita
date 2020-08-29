<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan For PHP</title>
</head>
<body>
    <?php
        $a=1;

        for ($a=1; $a<=5; $a++){ 
            echo"APA AJA";
        }
        echo"<br><br>";    
    ?>
    <?php
    // contoh 1
        for ($i=1; $i<=10  ; $i++) { 
            echo"$i";
        }
        echo"<br><br>";
    // contoh 2
        for ($i=1; ; $i++) { 
            if($i > 10){
                break;
            }
            echo"$i";
        }
        echo"<br><br>";
    // contoh 3
        $i=1;
        for (; ; ){
            if ($i > 10){
                break;
            }
            echo"$i";
            $i++;
        }
        echo"<br><br>";
        // contoh 4
        for ($i=1; $i<=10; print"$i", $i++);
        echo"<br><br>";
        // foreach
        $hewan=array("ayam","kambing","kucing","sapi");
        foreach ($hewan as $key => $value) {
            echo"$hewan[2]";
        }
        echo"<br><br>";
        $angka=array(1,2,3,4);
        foreach ($angka as $key => $value) {
            echo"".$angka[2]*$angka[3];
        }
        echo"<br><br>";
        foreach ($hewan as $key => $value) {
            echo"".$value[1];
        }
        echo"<br><br>";
        echo "Tugas 1";
        echo"<br>";
        for ($genap=1; $genap<=20; $genap++){
            if($genap%2==0){
                echo " ".$genap;
            }
        }
        echo"<br><br>";
        echo "Tugas 2";
        echo"<br>";
        for ($ganjil=1; $ganjil<=20; $ganjil++){
            if($ganjil%2==1){
                echo " ".$ganjil;
            }
        }
        echo"<br><br>";
        echo "Tugas 3";
        echo"<br>";
        for ($per2=2; $per2<=64; $per2*=2){
            echo " ".$per2;
            
        }
        echo"<br><br>";
        echo "Tugas 4";
        echo"<br>";
        for ($per3=1; $per3<=30; $per3++){
            if($per3%3==0){
                echo " ".$per3;
            }
        }
        echo"<br><br>";
        echo "Tugas 5";
        echo"<br>";
        for ($amtk=2; $amtk<=127; $amtk*=2){
            echo " ".$amtk+1;
        }



    ?>
</body>
</html>