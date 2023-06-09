<?php
include 'koneksi.php';
?>

<h3>Laporan Data Simpanan</h3>
<hr>
    <table class="table table-bordered" width="100%" cellspacing="0">
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
               
                
                
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            $laporan_simpanan = mysqli_query($connect,"SELECT * FROM laporan_simpanan");
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

            </tr>
            <?php } 
            ?>
            </table>
            <script>
                window.print();
                </script>