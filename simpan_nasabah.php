<?php
//membuat variabel dan menyimpan data
$id_nasabah          = $_POST['id_nasabah'];
$Nama           = $_POST['Nama'];
$alamat           = $_POST['alamat'];
$tgl_masuk          = $_POST['tgl_masuk'];
$nomor_hp       = $_POST['nomor_hp'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$keanggotaan           = $_POST['keanggotaan'];


include ('koneksi.php');
//menyimpan dan menginput data ke tabel nasabah
$query = "INSERT INTO nasabah (id_nasabah,Nama,alamat,tgl_masuk,nomor_hp, jenis_kelamin,keanggotaan)
VALUES('$id_nasabah','$Nama','$alamat','$tgl_masuk','$nomor_hp','$jenis_kelamin','$keanggotaan')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status)
?>