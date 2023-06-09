<?php
//membuat variabel dan menyimpan data
$id_nasabah     = $_POST['id_nasabah'];
$Nama           = $_POST['Nama'];
$jns            = $_POST['jns'];
$divisi         = $_POST['divisi'];
$transaksi      = $_POST['transaksi'];
$tgl_simpan     = $_POST['tgl_simpan'];
$status         = $_POST['status'];

include ('koneksi.php');
//menyimpan dan menginput data ke tabel simpanan
$query = "INSERT INTO simpanan (id_nasabah,Nama,jns,divisi,transaksi, tgl_simpan,status)
VALUES('$id_nasabah','$Nama','$jns','$divisi','$transaksi','$tgl_simpan','$status')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:list_simpanan.php?status=".$status)
?>