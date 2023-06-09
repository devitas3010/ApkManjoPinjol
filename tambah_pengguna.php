<?php 
include 'header.php';
?>
<div class="container" style="margin-top: 50px;">
    <h4>Input Data Pengguna</h4>
    <Form action="simpan_pengguna.php" method="post">
        <table class="table table-bordered">
        <tr>
              <td>id</td>
              <td><input name="id" type="texbox" placeholder="id" class="form-control"></td>
          </tr>
            <tr>
              <td>Nama</td>
              <td><input name="Nama" type="texbox" placeholder="nama" class="form-control"></td>
          </tr>
          <tr>
              <td>Username</td>
              <td><input name="Username" type="textbox" placeholder="Username" class="form-control"></td>
          </tr>
          <tr>
              <td>Password</td>
              <td><input name="Password" type="textbox" placeholder="password" class="form-control"></td>
          </tr>
            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="#" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
        </form>
</div>
<?php
include 'foother.php';
?>

