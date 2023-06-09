<?php

$id             = $_POST['id'];
$Nama           = $_POST['Nama'];
$image          = $_POST['image'];
$Password       = $_POST['Password'];


include ('koneksi.php');
$query = "UPDATE pengguna SET Nama='$Nama',image='$image',
Password='$Password' WHERE id='$id'";

$update = mysqli_query($koneksi,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}

header ("location:list_pengguna.php?status=".$status);

?>
