<?php
include 'header.php';

$id_nasabah = $_GET['id_nasabah'];
$query = mysqli_query ($connect,"select *from pinjaman where id_nasabah='$id_nasabah'");
$pinjaman = mysqli_fetch_array($query);
?>


<div class="container" style="margin-top: 50px;">
<h4>Update Data Pinjaman</h4>
<form action ="update_pinjaman.php" method="post">
        <table class="table table-bordered">
            <tr>
                <td>id_nasabah</td>
                <td><input type="text" name="id_nasabah"  value="<?php echo $pinjaman ['id_nasabah']?>" placeholder="id_nasabah" class="form-control"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text"  name="Nama" value="<?php echo $pinjaman ['Nama']?>" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>

            <tr>
              <td>Tanggal Penarikan</td>
              <td><input type="date" name="tgl_penarikan"  value="<?php echo $pinjaman ['tgl_penarikan']?>" placeholder="tgl_Penarikan" class="form-control"></td>
          </tr>
          <tr>
                <td>Transaksi</td>
                <td><select name="transaksi"  class="form-control">
                    <option>Debit</option>
                    <option>Credit</option>
                        </select></td>
            </tr>
            <tr>
              <td>Cicilan</td>
              <td><input type="text" name="ccln" value="<?php echo $pinjaman ['ccln']?>" placeholder="Ccln" class="form-control"></td>
          </tr>

          <tr>
              <td>Bunga</td>
              <td><input type="text" name="bnga"  value="<?php echo $pinjaman ['bnga']?>" placeholder="bunga" class="form-control"></td>
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
                <a href="pinjaman.php" class="btn btn-primary">
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