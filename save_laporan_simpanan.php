<?php
//membuat variabel dan menyimpan data
$kode_transaksi     = $_POST['kode_transaksi'];
$tgl                = $_POST['tgl'];
$Nasabah            = $_POST['Nasabah'];
$debit              = $_POST['debit'];
$kredit             = $_POST['kredit'];
$saldo              = $_POST['saldo'];
$keterangan         = $_POST['keterangan'];

include ('koneksi.php');
//menyimpan dan menginput data ke tabel laporan simpanan
$query = "INSERT INTO laporan_simpanan (kode_transaksi,tgl, Nasabah, debit, kredit,saldo,keterangan)
VALUES('$kode_transaksi','$tgl','$Nasabah','$debit','$kredit','$saldo','$keterangan')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:laporan_simpanan.php?status=".$status)
?>