<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-primary bg-dark">
            <a class="navbar-brand" href="#">
                <img src="images/logo-mini.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> SHOPIFY
            </a>
        </nav>
        <br>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group mb-2">
                        <label for="staticEmail2">Nama Barang :</label>
                        <input type="text" class="form-control" id="staticEmail2" placeholder="Masukkan Jumlah Data" name="jumlah">
                    </div>
                    <div class="form-group mb-2">
                        <input type="submit" name="tambah" value="Tambah" class="btn btn-light">
                    </div>
                </form>
                <?php
                if (isset($_POST['tambah'])){
                ?>
                    <form action="" method="POST">
                        <?php
                        $jumlah=$_POST['jumlah'];
                        for ($a=1;$a<=$jumlah;$a++){
                        ?>
                            <b>Data Barang ke - <?php echo $a;?><b><br>
                            <div class="form-group mb-2">
                                <label>Nama Barang :</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="nama_barang<?php echo !empty($a)?$a:'';?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword2">Harga Barang :</label>
                                <input type="number" class="form-control" placeholder="Harga Barang" name="harga_barang<?php echo!empty($a)?$a:'';?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword2">Jumlah</label>
                                <input type="number" class="form-control" placeholder="Jumlah Barang" name="jumlah_barang<?php echo!empty($a)?$a:'';?>">
                            </div>
                        <?php
                        }
                        ?>
                        <button type="submit" class="btn btn-light mb-2" name="harga">Cek Harga</button>
                    </form>
                <?php
                }
                ?>
            </div>
            <?php
            if (isset($_POST['harga'])){
                $nb1=!empty($_POST['nama_barang1'])?$_POST['nama_barang1']:'';
                $hb1=!empty($_POST['harga_barang1'])?$_POST['harga_barang1']:'';
                $jb1=!empty($_POST['jumlah_barang1'])?$_POST['jumlah_barang1']:'';

                $nb2=!empty($_POST['nama_barang2'])?$_POST['nama_barang2']:'';
                $hb2=!empty($_POST['harga_barang2'])?$_POST['harga_barang2']:'';
                $jb2=!empty($_POST['jumlah_barang2'])?$_POST['jumlah_barang2']:'';

                $nb3=!empty($_POST['nama_barang3'])?$_POST['nama_barang3']:'';
                $hb3=!empty($_POST['harga_barang3'])?$_POST['harga_barang3']:'';
                $jb3=!empty($_POST['jumlah_barang3'])?$_POST['jumlah_barang3']:'';

                $nb4=!empty($_POST['nama_barang4'])?$_POST['nama_barang4']:'';
                $hb4=!empty($_POST['harga_barang4'])?$_POST['harga_barang4']:'';
                $jb4=!empty($_POST['jumlah_barang4'])?$_POST['jumlah_barang4']:'';

                $nb5=!empty($_POST['nama_barang5'])?$_POST['nama_barang5']:'';
                $hb5=!empty($_POST['harga_barang5'])?$_POST['harga_barang5']:'';
                $jb5=!empty($_POST['jumlah_barang5'])?$_POST['jumlah_barang5']:'';

                $hasil1=!empty($hb1*$jb1)?$hb1*$jb1:'';
                $hasil2=!empty($hb2*$jb2)?$hb2*$jb2:'';
                $hasil3=!empty($hb3*$jb3)?$hb3*$jb3:'';
                $hasil4=!empty($hb4*$jb4)?$hb4*$jb4:'';
                $hasil5=!empty($hb5*$jb5)?$hb5*$jb5:'';

                $total_harga=!empty($hasil1+$hasil2+$hasil3+$hasil4+$hasil5)?$hasil1+$hasil2+$hasil3+$hasil4+$hasil5:'';
            } 
            ?>
            <div class="col-md-6">
                <div class="alert alert-success" role="alert">
                    <?php echo"".!empty($total_harga)?"Total yang harus dibayar Rp.".$total_harga:'';?>
                </div>
            </div>
        </div>
    </div>
    <?php
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>