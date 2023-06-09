<?php 
include 'header.php';

$id_nasabah = $_GET['id_nasabah'];
$query = mysqli_query($connect, "select *from nasabah where id_nasabah= '$id_nasabah'");
$nasabah = mysqli_fetch_array ($query);



?>
<div class="container" style="margin-top: 50px;">
    <h4> Edit Data nasabah</h4>
    <Form action="update_nasabah.php" method="post">
    <table class="table table-bordered">
            <tr>
                <td>id_nasabah</td>
                <td><input type="text" name="id_nasabah" value="<?php echo $nasabah['id_nasabah'] ?>" Placeholder="id_nasabah" class="form-control"></td>
            </tr>
            
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $nasabah['Nama'] ?>" Placeholder="Nama Lengkap" class="form-control"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $nasabah['alamat'] ?>" Placeholder="alamat" class="form-control"></td>
            </tr>

            <tr>
              <td>tgl_masuk</td>
              <td><input type="date" name="tgl_masuk" value="<?php echo $nasabah['tgl_masuk'] ?>" Placeholder="tgl_masuk" class="form-control"></td>
          </tr>

          <tr>
              <td>nomor_hp</td>
              <td><input type="text" name="nomor_hp" value="<?php echo $nasabah['nomor_hp'] ?>" Placeholder="Nomor HP" class="form-control"></td>
          </tr>  

                    <tr>
                    <td>jenis_kelamin</td>
                     <td>
                    <select name="jenis_kelamin"  value="<?php echo $nasabah['jenis_kelamin'] ?>" class="form-control">
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                    </select></td>
                    </tr>
            
                    <tr>
                <td>Keanggotaan</td>
                <td><select name="keanggotaan" value="<?php echo $nasabah['keanggotaan'] ?>"  class="form-control">
                    <option>Masyarakat</option>
                    <option>Anggota</option>
                    <option>Pelajar/Mahasiswa</option>
                </select></td>
                </tr>
                
                <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">
            <i class =" fa fa-floppy-o" aria -hidden="true"></i>
            Simpan Perubahan</button>
                <a href="index.php" class="btn btn-primary">
                    <i class ="fa fa-reply" aria hidden="true"></i>
                    Batal</a>
                </td>
            </tr>
        </table>
</form>
</div>
<?php 
include 'foother.php';
?>
