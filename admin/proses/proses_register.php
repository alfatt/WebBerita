<?php
    include'koneksi.php';
    if (isset($_POST['register'])){
        $un=$_POST['username'];
        $pw=md5($_POST['password']);
        $em=($_POST['email']);
        $nohp=($_POST['no_hp']);
        $ag=!empty($_POST['agree'])?$_POST['agree']:'';
        $id=uniqid();
        $level='autor';

        $query_input=mysqli_query($koneksi, "insert into user values(md5('$id'),'$un','$em',md5('$pw'),'$nohp','$ag','$level')");

        if($query_input){
            echo'<script>alert("berhasil daftar")
                window.location.href="../login.php"
                </script>';
        }else{
            echo'<script>alert("daftar gagal")
                window.location.href="../register.php"
                </script>';
        }
    }
?>