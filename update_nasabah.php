<?php
//membuat variabel dan menyimpan data
$id_nasabah          = $_POST['id_nasabah'];
$Nama           = $_POST['Nama'];
$alamat           = $_POST['alamat'];
$tgl_masuk          = $_POST['tgl_masuk'];
$nomor_hp       = $_POST['nomor_hp'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$keanggotaan           = $_POST['keanggotaan'];



//memanggil koneksi
include ('koneksi.php');
//query update ke tabel mahasiswa
$query = "UPDATE nasabah SET Nama='$Nama',alamat='$alamat',tgl_masuk='$tgl_masuk',nomor_hp='$nomor_hp', 
jenis_kelamin='$jenis_kelamin',
keanggotaan='$keanggotaan' where id_nasabah='$id_nasabah'";


$update = mysqli_query($connect,$query);
//check status apakah query berhasil atau tidak
if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:index.php?status=".$status)
?>