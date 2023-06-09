<?php
include 'header.php';

$id_nasabah = $_GET['id_nasabah'];
$query = mysqli_query ($connect,"select *from simpanan where id_nasabah='$id_nasabah'");
$simpanan = mysqli_fetch_array($query);
?>


<div class="container" style="margin-top: 50px;">
<h4>Update Data Simpanan</h4>
<form action ="update_simpanan.php" method="post">
        <table class="table table-bordered">
            <tr>
                <td>id_nasabah</td>
                <td><input type="text" name="id_nasabah"  value="<?php echo $simpanan ['id_nasabah']?>" placeholder="id_nasabah" class="form-control"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text"  name="Nama" value="<?php echo $simpanan ['Nama']?>" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>

            <tr>
              <td>Jenis</td>
              <td><input type="text" name="jns" value="<?php echo $simpanan ['jns']?>" placeholder="Jns" class="form-control"></td>
          </tr>

          <tr>
              <td>Divisi</td>
              <td><input type="text" name="divisi"  value="<?php echo $simpanan ['divisi']?>" placeholder="Divisi" class="form-control"></td>
          </tr>

          <tr>
                <td>Transaksi</td>
                <td><select name="transaksi"  class="form-control">
                    <option value="D">Debit</option>
                    <option value="C" >Credit</option>
                        </select></td>
            </tr>

          <tr>
              <td>Tanggal Simpan</td>
              <td><input type="date" name="tgl_simpan"  value="<?php echo $simpanan ['tgl_simpan']?>" placeholder="tgl_Simpan" class="form-control"></td>
          </tr>

                <tr>
                <td>Status</td>
                <td><select name="status"  class="form-control">
                    <option>Aktif</option>
                    <option>Non Aktif</option>
                </select></td>
                </tr>

                <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">
            <i class =" fa fa-floppy-o" aria -hidden="true"></i>
            Simpan Perubahan</button>
                <a href="list_simpanan.php" class="btn btn-primary">
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