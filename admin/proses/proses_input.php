<?php
    include'koneksi.php';
    if (isset($_POST['input_user'])){
        $un=$_POST['username'];
        $pw=md5($_POST['password']);
        $em=($_POST['email']);
        $nohp=($_POST['no_hp']);
        $id=uniqid();
        $level=$_POST['level'];

        $query_input=mysqli_query($koneksi, "insert into user values(md5('$id'),'$un','$em',md5('$pw'),'$nohp','','$level')");

        if($query_input){
            echo'<script>alert("Data User Berhasil di Input")
                window.location.href="../basic_elements.php"
                </script>';
        }
    }
?>