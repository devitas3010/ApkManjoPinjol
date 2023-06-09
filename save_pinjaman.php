<?php
//membuat variabel dan menyimpan data
$id_nasabah     = $_POST['id_nasabah'];
$Nama           = $_POST['Nama'];
$tgl_penarikan  = $_POST['tgl_penarikan'];
$transaksi      = $_POST['transaksi'];
$ccln        = $_POST['ccln'];
$bnga        = $_POST['bnga'];
$status         = $_POST['status'];

include ('koneksi.php');
//menyimpan dan menginput data ke tabel pinjaman
$query = "INSERT INTO pinjaman (id_nasabah,Nama, tgl_penarikan,transaksi, ccln,bnga ,status)
VALUES('$id_nasabah','$Nama','$tgl_penarikan','$transaksi','$ccln','$bnga','$status')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:pinjaman.php?status=".$status)
?>