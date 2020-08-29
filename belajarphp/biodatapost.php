<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA WITH METODE POST</title>
    <ling rel="stylesheet" href="css/bootsrap.css">
</head>
<body> 
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Nama :</label>
        <input type="text" name="nama_lengkap">
        <br>
        <label for="">Tanggal Lahir :</label>
        <input type="date" name="tgl">
        <br>
        <label for="">Tempat Lahir :</label>
        <input type="text" name="tpt_lahir">
        <br>
        <label for="">Jenis Kelamin :</label>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        <br>
        <label for="">Hobi :</label>
        <input type="checkbox" name="baca" value="baca">Membaca
        <input type="checkbox" name="nonton" value="nonton">Menonton
        <input type="checkbox" name="ngoding" value="ngoding">Ngoding
        <br>
        <label for="">Alamat :</label>
        <textarea name="alamat" cols="30" rows="10"></textarea>
        <br>
        <label for="">Kabupaten :</label>
        <select name="kabupaten">
            <option>Pilih Kabupaten</option>
            <option value="Banda Aceh">Banda Aceh</option>
            <option value="Aceh Besar">Aceh Besar</option>
            <option value="Sigli">Sigli</option>
        </select>
        <br>
        <label for="">Pendidikan :</label>
        <select name="pendidikan">
            <option>Pilih Pendidikan</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
            <option value="S1">S1</option>
        </select>
        <br>
        <label for="">Pekerjaan :</label>
        <input type="text" name="pekerjaan">
        <br>
        <label for="">Agama :</label>
        <select name="agama">
            <option>Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select>
        <br>
        <label for="">Foto :</label>
        <input type="file" name="foto">
        <br>
        <label for="">Password :</label>
        <input type="password" name="pass">
        <br>
        <label for="">Username :</label>
        <input type="text" name="username">
        <br>

        <input type="submit" name="input" value="tampilkan">
    </form>
    <?php
        if(isset($_POST["input"])){
            $nama=$_POST["nama_lengkap"];
            $tanggal=$_POST["tgl"];
            $tpt_lahir=$_POST["tpt_lahir"];
            $jk=!empty($_POST["jenis_kelamin"])?$_POST["jenis_kelamin"]:"Anda Belum Memilih Jenis Kelamin";
            $hobi1=!empty($_POST["baca"])?$_POST["baca"]:'';
            $hobi2=!empty($_POST["nonton"])?$_POST["nonton"]:'';
            $hobi3=!empty($_POST["ngoding"])?$_POST["ngoding"]:'';
            $alamat=$_POST["alamat"];
            $kabupaten=$_POST["kabupaten"];
            $pendidikan=$_POST["pendidikan"];
            $pekerjaan=$_POST["pekerjaan"];
            $agama=$_POST["agama"];
            $foto=$_FILES["foro"]["name"];
            if(move_uploaded_file($_FILES["foto"]["tmp_name"],'img/'.$_FILES["foto"]["name"])){
                echo"Upload Berhasil";
            } else{
                echo"Upload Gagal";
            }
            $password=$_POST["pass"];
            $username=$_POST["username"];

            echo'$nama<br>$tanggal<br>$tpt_lahir<br>$jk<br>$hobi1<br>$hobi2<br>$hobi3<br><div class="alert alert-primary" role="alert">$alamat</div><br>$kabupaten<br>$pendidikan<br>$pekerjaan<br>$agama<br><img src="img/$foto"><br>$password<br>$username<br>'; 
        }
    ?>
    <script src"js/bootstrap.js"></script>
    
</body>
</html>