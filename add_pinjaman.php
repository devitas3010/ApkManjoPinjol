<?php
include 'header.php';
?>
<div class="container" style="margin-top: 50px;">
<h4>Input Data Pinjaman</h4>
<form action="save_pinjaman.php" method="post">
        <table class="table table-bordered">
            <tr>
                <td>ID Nasabah</td>
                <td><input name="id_nasabah" type="textbox" placeholder="ID Nasabah" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="Nama" type="textbox" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
              <td>Tanggal Penarikan</td>
              <td><input name="tgl_penarikan" type="date" placeholder="Tanggal Penarikan" class="form-control"></td>
          </tr>
          <tr>
                <td>Transaksi</td>
                <td><select name="transaksi" class="form-control">
                    <option>Debit</option>
                    <option>Credit</option>
                        </select></td>
            </tr>
            <tr>
              <td>cicilan</td>
              <td><input name="ccln" type="textbox" placeholder="cicilan" class="form-control"></td>
          </tr>
            
            <tr>
              <td>Bunga</td>
              <td><input name="bnga" type="textbox" placeholder="bunga" class="form-control"></td>
          </tr>

            <tr>
                <td>Status</td>
                <td><select name="status" class="form-control">
                    <option>Aktif</option>
                    <option>Non Aktif</option>
                </select></td>
            </tr>

            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-primary">
            <i class ="fa fa-floppy-o" aria-hidden="true"></i>
            Tambahkan Data</button>
                <a href="pinjaman.php" class="btn btn-danger">
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
