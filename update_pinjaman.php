<?php
//membuat variabel dan menyimpan data
$id_nasabah     = $_POST['id_nasabah'];
$Nama           = $_POST['Nama'];
$tgl_penarikan  = $_POST['tgl_penarikan'];
$transaksi      = $_POST['transaksi'];
$ccln        = $_POST['ccln'];
$bnga        = $_POST['bnga'];
$status         = $_POST['status'];

//memanggil koneksi
include ('koneksi.php');
//query update ke tabel pinjaman
$query = "UPDATE pinjaman SET Nama='$Nama', tgl_penarikan='$tgl_penarikan', transaksi='$transaksi',
 ccln='$ccln', bnga='$bnga', 
status='$status' where id_nasabah='$id_nasabah'";


$update = mysqli_query($connect,$query);
//check status apakah query berhasil atau tidak
if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:pinjaman.php?status=".$status)
?>