<?php
$id= $_GET['id'];
include('koneksi.php');
$delete = mysqli_query($connect,"delete from pengguna where id ='$id'");
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:list_pengguna.php?status=".$status);
?>