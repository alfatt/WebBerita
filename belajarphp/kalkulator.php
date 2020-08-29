<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-inline" action="" method="POST">
                    <div class="form-group mb-2">
                        <label for="" class="sr-only">Nilai 1</label>
                        <input type="number" class="form-control" name="nilai_pertama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="sr-only">Nilai 2</label>
                        <input type="number" class="form-control" name="nilai_kedua">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" name="tambah"> + </button>
                    <button type="submit" class="btn btn-danger mb-2" name="kurang"> - </button>
                    <button type="submit" class="btn btn-warning mb-2" name="kali"> x </button>
                    <button type="submit" class="btn btn-success mb-2" name="bagi"> : </button>
                </form>
            </div>
            <?php
                if(isset($_POST["tambah"])){
                    $nilai1=$_POST["nilai_pertama"];
                    $nilai2=$_POST["nilai_kedua"];
                    $tambah=$nilai1+$nilai2;
                }elseif(isset($_POST["kurang"])){
                    $nilai1=$_POST["nilai_pertama"];
                    $nilai2=$_POST["nilai_kedua"];
                    $kurang=$nilai1-$nilai2;
                }elseif(isset($_POST["kali"])){
                    $nilai1=$_POST["nilai_pertama"];
                    $nilai2=$_POST["nilai_kedua"];
                    $kali=$nilai1*$nilai2;
                }elseif(isset($_POST["bagi"])){
                    $nilai1=$_POST["nilai_pertama"];
                    $nilai2=$_POST["nilai_kedua"];
                    $bagi=$nilai1/$nilai2;
                }
            ?>
            <div class="col-md-6">
                <div class="alert alert-primary" role="alert">
                    <?php echo"".!empty($tambah)?$tambah:''?>
                </div>
                <div class="alert alert-danger" role="alert">
                    <?php echo"".!empty($kurang)?$kurang:''?>
                </div>
                <div class="alert alert-warning" role="alert">
                    <?php echo"".!empty($kali)?$kali:''?>
                </div>
                <div class="alert alert-success" role="alert">
                    <?php echo"".!empty($bagi)?$bagi:''?>
                </div>
            </div>
        </div>
    </div>













    <script src="js/bootstrap.js"></script>
</body>
</html>