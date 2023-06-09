<?php
include 'header.php';

$kode_transaksi = $_GET['kode_transaksi'];
$query = mysqli_query ($connect,"select *from laporan_simpanan where kode_transaksi='$kode_transaksi'");
$laporan_simpanan = mysqli_fetch_array($query);
?>


<div class="container" style="margin-top: 50px;">
<h4>Update Data Laporan</h4>
<form action ="update_Laporan_simpanan.php" method="post">
        <table class="table table-bordered">
            <tr>
                <td>kode_transaksi</td>
                <td><input type="text" name="kode_transaksi"  value="<?php echo $laporan_simpanan ['kode_transaksi']?>" placeholder="kode_transaksi" class="form-control"></td>
            </tr>

            <tr>
                <td>Tanggal</td>
                <td><input type="date"  name="tgl" value="<?php echo $laporan_simpanan ['tgl']?>" placeholder="Tanggal" class="form-control"></td>
            </tr>

            <tr>
              <td>Nasabah</td>
              <td><input type="textbox" name="Nasabah"  value="<?php echo $laporan_simpanan ['Nasabah']?>" placeholder="Nasabah" class="form-control"></td>
          </tr>
        
            <tr>
              <td>Debit</td>
              <td><input type="text" name="debit" value="<?php echo $laporan_simpanan ['debit']?>" placeholder="debit" class="form-control"></td>
          </tr>

          <tr>
              <td>Kredit</td>
              <td><input type="text" name="kredit"  value="<?php echo $laporan_simpanan ['kredit']?>" placeholder="Kredit" class="form-control"></td>
          </tr>

          <tr>
              <td>Saldo</td>
              <td><input type="text" name="saldo"  value="<?php echo $laporan_simpanan ['saldo']?>" placeholder="saldo" class="form-control"></td>
          </tr>

          <tr>
              <td>Keterangan</td>
              <td><input type="text" name="keterangan"  value="<?php echo $laporan_simpanan ['keterangan']?>" placeholder="Keteranngan" class="form-control"></td>
          </tr>


                

                <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">
            <i class =" fa fa-floppy-o" aria -hidden="true"></i>
            Simpan Perubahan</button>
                <a href="laporan_simpanan.php" class="btn btn-primary">
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