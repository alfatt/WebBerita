<?php
include'koneksi.php';
$id=$_GET['id'];
$query_delete=mysqli_query($koneksi, "delete from user where id_user='$id'");
if($query_delete){
    echo"<script>alert('Data Berhasil Dihapus')
        window.location.href='../basic_elements.php';
    </script>";
}else{
    echo"<script>alert('Data Gagal Dihapus')
        window.location.href='../basic_elements.php';
    </script>";
}

?>