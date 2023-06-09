<?php
$kode_transaksi= $_GET['kode_transaksi'];
include('koneksi.php');
$delete = mysqli_query($connect," delete from laporan_simpanan where kode_transaksi='$kode_transaksi'");
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:laporan_simpanan.php?status=".$status);
?>