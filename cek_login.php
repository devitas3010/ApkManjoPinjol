<?php
$UsernameTxt= $_POST['Username'];
$PasswordTxt=$_POST['Password'];

include 'koneksi.php';

$pengguna = mysqli_query($connect, "SELECT * FROM pengguna WHERE Username='$UsernameTxt' and Password='$PasswordTxt'");
$check = mysqli_num_rows($pengguna);
if($check>0){
    //jiks data tersedia, simpan data pengguna ke dalam session
    session_start();
    $penggunaRow = mysqli_fetch_array($pengguna);
    $_SESSION['Username'] = $penggunaRow['Username'];
    $_SESSION['Password'] = $penggunaRow['Password'];
    header("Location:dashboard.php");
}else{
    header("Location:login.php");
}

?>