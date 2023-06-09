<?php
$id_nasabah= $_GET['id_nasabah'];
include('koneksi.php');
$delete = mysqli_query($connect," delete from simpanan where id_nasabah='$id_nasabah'");
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>