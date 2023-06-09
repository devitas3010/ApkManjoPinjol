<?php
//membuat variabel dan menyimpan data
$id       = $_POST['id'];
$Nama          = $_POST['Nama'];
$Username         = $_POST['Username'];
$Password      = md5( $_POST['Password']);

//memanggil koneksi
include ('koneksi.php');
//query update ke tabel mahasiswa
$query = "UPDATE pengguna SET Nama='$Nama',Username='$Username',Password='$Password' where id='$id'";


$update = mysqli_query($connect,$query);
//check status apakah query berhasil atau tidak
if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:list_pengguna.php?status=".$status)
?>