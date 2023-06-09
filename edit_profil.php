<?php 
include 'header.php';

include 'koneksi.php';

$id      = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM pengguna WHERE id='$id'");
$pengguna = mysqli_fetch_array($query);

?>

<div class="container" style="margin-top: 50px;">
    <h4>Edit Profile</h4>
    <Form action="update_profil.php" method="post">
    <table class="table table-bordered">
    <form>
    <div class="row mb-3">
        <label for="Username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="Username" name="Username" value="<?php echo $pengguna['Username'] ?>" Placeholder="Username Pengguna" class="form-control">
        </div>
      </div>
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="name" name="Username"  value="<?php echo $pengguna['Nama'] ?>" Placeholder="Username Pengguna" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-2">Gambar</div>
              <div class="col-sm-5">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="" class="img-thumbnail">
                  </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input" 
                id="image" name="image">
                <label class="custom-file-label" 
                for="image">Pilih Gambar</label>
              </div>
              
            </div>
          </div>
        </div>
</div>
</div>
            
                  <div class="form-group row justify-content-start">
                    
                    <div class="col-sm-5">
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="header.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>




