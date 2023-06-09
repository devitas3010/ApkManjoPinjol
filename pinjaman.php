<?php
include 'header.php';
?>
             

        <div class="container" style="margin-top: 50px;">
        <h4 class="mt-4"> Data Pinjaman</h4>
        <a href ="add_pinjaman.php" class="btn btn-primary mb-3">
            <i class=" fa fa-plus"></i>
            Tambah  Data</a>
            
        <table  id ="dt" class="table align-middle  table-bordered  table-hover">
            <thead>
            <tr>
                
                <th><center>No</center></th>
                <th><center>id_nasabah</center></th>
                <th>Nama</th>
                <th>Tanggal Penarikan</th>
                <th>Transaksi</th>
                <th>Cicilan</th>
                <th>Bunga</th>
                <th>Status</th>
                <th width="200">Action</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            $pinjaman = mysqli_query($connect," select *from pinjaman");
            while($row=mysqli_fetch_array($pinjaman)){
            ?>
            <tr>
                <th><center><?php echo $nomor;?></center></td>
                <td><center><?php echo $row['id_nasabah']?></center></td>
                <td><?php echo $row['Nama']?></td>
                <td><?php echo $row['tgl_penarikan']?></td>
                <td><?php echo $row['transaksi']?></td>
                <td><?php echo $row['ccln']?></td>
                <td><?php echo $row['bnga']?></td>
                <td><?php echo $row['status']?></td>
            
                <td>
                    <a href="edit_pinjaman.php?id_nasabah=<?php echo $row['id_nasabah'];?>" class="btn btn-warning btn-sm">
                    <i class =" fa fa-pencil"></i></a>
                    <a href="delete_pinjaman.php?id_nasabah=<?php echo $row['id_nasabah'];?> " class="btn btn-danger btn-sm">
                    <i class=" fa fa-trash"></i></a>    
                </td>
                
            </td>
            </tr>
          
            <?php
        $nomor++;
            }
            ?>
            </tbody>
        </table>

        </div>
        <div clas="mb-5"></div>
        <?php
        
include 'foother.php';
?>

   
