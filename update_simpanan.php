<?php
//membuat variabel dan menyimpan data
$id_nasabah     = $_POST['id_nasabah'];
$Nama           = $_POST['Nama'];
$jns            = $_POST['jns'];
$divisi         = $_POST['divisi'];
$transaksi      = $_POST['transaksi'];
$tgl_simpan     = $_POST['tgl_simpan'];
$status         = $_POST['status'];



//memanggil koneksi
include ('koneksi.php');
//query update ke tabel simpanan
$query = "UPDATE simpanan SET Nama='$Nama', jns='$jns', divisi='$divisi', transaksi='$transaksi', 
tgl_simpan='$tgl_simpan', status='$status' where id_nasabah='$id_nasabah'";


$update = mysqli_query($connect,$query);
//check status apakah query berhasil atau tidak
if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:list_simpanan.php?status=".$status)
?>