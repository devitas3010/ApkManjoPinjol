<?php
include 'header.php';
?>
<div class="container" style="margin-top: 50px;">
<h4>Input Data Laporan</h4>
<form action="save_laporan_simpanan.php" method="post">
        <table class="table table-bordered">
            <tr>
                <td>Kode Transaksi</td>
                <td><input name="kode_transaksi" type="textbox" placeholder="Kode Transaksi" class="form-control"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input name="tgl" type="date" placeholder="Tanggal" class="form-control"></td>
            </tr>
            <tr>
                <td>Nasabah</td>
                <td><input name="Nasabah" type="textbox" placeholder="Nasabah" class="form-control"></td>
            </tr>
            <tr>
              <td>Debit</td>
              <td><input name="debit" type="textbox" placeholder="Debit" class="form-control"></td>
          </tr>
          <tr>
              <td>Kredit</td>
              <td><input name="kredit" type="textbox" placeholder="Kredit" class="form-control"></td>
          </tr>
          <tr>
              <td>Saldo</td>
              <td><input name="saldo" type="textbox" placeholder="Saldo" class="form-control"></td>
          </tr>
          <tr>
              <td>Keterangan</td>
              <td><input name="keterangan" type="textbox" placeholder="Keterangan" class="form-control"></td>
          </tr>
        
          

            

            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-primary">
            <i class =" fa fa-floppy-o" aria-hidden="true"></i>
            Tambahkan Data</button>
                <a href="laporan_simpanan.php" class="btn btn-danger">
                    <i class ="fa fa-reply" aria-hidden="true"></i>
                    Batal</a>
                </td>
            </tr>
        </table>
</form>
</div>
<?php
include 'foother.php';
?>
