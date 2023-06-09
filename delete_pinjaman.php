<?php
$id_nasabah= $_GET['id_nasabah'];
include('koneksi.php');
$delete = mysqli_query($connect," delete from pinjaman where id_nasabah='$id_nasabah'");
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:pinjaman.php?status=".$status);
?>