<?php
//membuat variabel dan menyimpan data
$kode_transaksi     = $_POST['kode_transaksi'];
$tgl                = $_POST['tgl'];
$Nasabah            = $_POST['Nasabah'];
$debit              = $_POST['debit'];
$kredit             = $_POST['kredit'];
$saldo              = $_POST['saldo'];
$keterangan         = $_POST['keterangan'];


//memanggil koneksi
include ('koneksi.php');
//query update ke tabel laporan simpanan
$query = "UPDATE laporan_simpanan SET tgl='$tgl', Nasabah='$Nasabah', debit='$debit', kredit='$kredit', 
saldo='$saldo' where kode_transaksi='$kode_transaksi'";


$update = mysqli_query($connect,$query);
//check status apakah query berhasil atau tidak
if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:laporan_simpanan.php?status=".$status)
?>