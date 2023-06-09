<?php
include 'header.php';
?>
<div class="container" style="margin-top: 50px;">
<h4>Input Data Nasabah</h4>
<form action="simpan_nasabah.php" method="post">
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
                <td>Alamat</td>
                <td><input name="alamat" type="textbox" placeholder="Alamat" class="form-control"></td>
            </tr>
            <tr>
              <td>Tanggal Masuk</td>
              <td><input name="tgl_masuk" type="date" placeholder="Tanggal Masuk" class="form-control"></td>
          </tr>
          <tr>
              <td>Nomor HP</td>
              <td><input name="nomor_hp" type="textbox" placeholder="Nomor Handphone" class="form-control"></td>
          </tr>
        
          <tr>
                <td>Jenis_kelamin</td>
                <td><select name="jenis_kelamin"  class="form-control">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan" >Perempuan</option>
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
                  <button type="submit" class="btn btn-primary">
            <i class =" fa fa-floppy-o" aria-hidden="true"></i>
            Tambahkan Data</button>
                <a href="index.php" class="btn btn-danger">
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
