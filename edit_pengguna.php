<?php 
include 'header.php';

$id = $_GET['id'];
$query = mysqli_query($connect, "select * from pengguna where id = '$id'");
$pengguna = mysqli_fetch_array ($query);
?>

<div class="container" style="margin-top: 50px;">
    <h4>Edit Data Pengguna</h4>
    <Form action="update_pengguna.php" method="post">
    <table class="table table-bordered">
    <tr>
                <td>id</td>
                <td><input type="textbox" name="id" value="<?php echo $pengguna['id'] ?>" Placeholder="id" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="textbox" name="Nama" value="<?php echo $pengguna['Nama'] ?>" Placeholder="Nama_Lengkap" class="form-control"></td>
            </tr>
            <tr>
              <td>Username</td>
              <td><input type="textbox" name="Username" value="<?php echo $pengguna['Username'] ?>" Placeholder="Username" class="form-control"></td>
          </tr>
          <tr>
              <td>Password</td>
              <td><input type="Password" name="Password" value="<?php echo $pengguna['Password'] ?> " Placeholder="password" class="form-control"></td>
          </tr>
         
            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success"> 
                  Simpan Data</button>
                <a href="list_pengguna.php" class="btn btn-primary">
                    Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>
<?php 
include 'foother.php';
?>
