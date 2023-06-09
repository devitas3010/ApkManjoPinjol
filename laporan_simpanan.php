<?php
include 'header.php';
?>

<div class="col-md-12">
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary"> DATA LAPORAN</h6>
</div>
<div class="row mt-8">
    <div class="col">
<form method="post" class="form-inline">
    <input type="date" name="tgl_mulai" class="form-control">
    <input type="date" name="tgl_selesai" class="form-control">
    <button type="submit" name="filter_tgl" class="btn btn-info">Search</button>
</form>
</div>
            <div class="card-body">
                <div class="table table-responsive">
                <a href ="tambah_laporan_simpanan.php" class="btn btn-primary mb-3"><i class=" fa fa-plus"></i>
            Tambah  Data</a>
</div>
            <table id ="dt" class="table align-middle  table-bordered  table-hover">
        <thead>
            <tr>
                <td><center>No</center></td>
                <td><center>Kode Transaksi</center></td>
                <td>Tanggal</td>
                <td>Nasabah</td>
                <td>Debit</td>
                <td>Kredit</td>
                <td>Saldo</td>
                <td>Keterangan</td>
                <th width="200">Action</th>
                
                
            </tr>
            </thead>
            <tbody>
            <?php

            if(isset($_POST['filter_tgl'])) {
                $mulai= $_POST['tgl_mulai'];
                $selesai=$_POST['tgl_selesai'];
                
                if($mulai!=null || $selesai!=null) {
                $ambilsemuadata= mysqli_query($connect, "SELECT *From laporan_simpanan l, simpanan s, pengguna p where s.id_nasabah= l.kode_transaksi and m.id=p.id and tanggal BETWEEN '$mulai' and DATE_ADD($selesai, INTERVAL 1 DAY) order by idlaporan_simpanan DESC"); 
                 } else {
                $ambilsemuadata = mysqli_query($connect, "SELECT * FROM laporan_simpanan l, simpanan s, pengguna p  where s.id_nasabah=l.kode_transaksi and m.id=p.id order by idlaporan_simpanan DESC ");
                 }
            } else {
                $ambilsemuadata= mysqli_query($connect, "SELECT *From laporan_simpanan l, simpanan s,pengguna p where s.id_nasabah=l.kode_transaksi and m.id=p.id order by id_laporan_simpanan DESC"); 
            }

            $nomor =1;
            $laporan_simpanan = mysqli_query($connect,"select *from laporan_simpanan");
            while($row=mysqli_fetch_array($laporan_simpanan)){
            ?>
            <tr>
                <th><center><?php echo $nomor;?></center></td>
                <td><center><?php echo $row['kode_transaksi']?></center></td>
                <td><?php echo $row['tgl']?></td>
                <td><?php echo $row['Nasabah']?></td>
                <td><?php echo $row['debit']?></td>
                <td><?php echo $row['kredit']?></td>
                <td><?php echo $row['saldo']?></td>
                <td><?php echo $row['keterangan']?></td>

                <td>
                    <a href="edit_laporan_simpanan.php?kode_transaksi=<?php echo $row['kode_transaksi'];?>" class="btn btn-success btn-sm">
                    <i class =" fa fa-pencil"></i></a>
                    <a href="delete_laporan_simpanan.php?kode_transaksi=<?php echo $row['kode_transaksi'];?> " class="btn btn-danger btn-sm">
                    <i class=" fa fa-trash"></i></a>    
                </td>
                

            </tr>
            <?php } 
            ?>
            </table>
            <a href ="cetak.php" target="_BLANK" class="d-none d-sm-inline-block btn btn-success mb-3">
                <i class=" fa fa-print  fa-sm text-white-50"></i>
                Cetak Laporan</a>