<?php
include 'header.php';
?>
<div class="container" style="margin-top: 50px;">
<h4>Input Data Simpanan</h4>
<form action="simpan_simpanan.php" method="post">
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
                <td>Jenis</td>
                <td><input name="jns" type="textbox" placeholder="Jenis" class="form-control"></td>
            </tr>
            <tr>
              <td>Divisi</td>
              <td><input name="divisi" type="textbox" placeholder="Divisi" class="form-control"></td>
          </tr>
        
          <tr>
                <td>Transaksi</td>
                <td><select name="transaksi" class="form-control">
                    <option value="D">Debit</option>
                    <option value="C" >Credit</option>
                        </select></td>
            </tr>
                
            <tr>
              <td>tgl_simpan</td>
              <td><input name="tgl_simpan" type="date" placeholder="tgl_simpan" class="form-control"></td>
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
            <i class =" fa fa-floppy-o" aria-hidden="true"></i>
            Tambahkan Data</button>
                <a href="list_simpanan.php" class="btn btn-danger">
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
