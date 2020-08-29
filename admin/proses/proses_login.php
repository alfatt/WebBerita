<?php
    session_start();
    include"koneksi.php";
    if (isset($_POST['login'])){
        $un=$_POST['username'];
        $pw=md5($_POST['password']);

        $query=mysqli_query($koneksi, "select * from user where username='$un' and password=md5('$pw')");
        $cek=mysqli_num_rows($query);
        $data=mysqli_fetch_assoc($query);

        if($cek>0){
            if($data['level']=='admin'){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['id_user']=$data['id_user'];
                echo'<script>alert("Selamat Datang Admin")
                    window.location.href="../index.php"
                    </script>';
            }elseif($data['level']=='operator'){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['id_user']=$data['id_user'];
                echo'<script>alert("Selamat Datang Operator")
                    window.location.href="../index.php"
                    </script>';
            }elseif($data['level']=='autor'){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['id_user']=$data['id_user'];
                echo'<script>alert("Selamat Datang Autor")
                    window.location.href="../index.php"
                    </script>';
            }else{
                header('location:../login.php?pesan=gagal');    
            }
        }else{
            header('location:../login.php');
        }
    }
?>