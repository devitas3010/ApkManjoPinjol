<?php
$id           = $_POST['id'];
$Nama         = $_POST['Nama'];
$Username     = $_POST['Username'];
$Password     = md5($_POST['Password']);

include ('koneksi.php');
$query = "INSERT INTO pengguna (id,Nama,Username,Password) VALUES('$id','$Nama','$Username','$Password')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:list_pengguna.php?status=".$status);
?>

