<?php
include 'header.php';
?>
             

        <div class="container" style="margin-top: 50px;">
        <h4 class="mt-4"> Data Simpanan</h4>
        <a href ="tambah_simpanan.php" class="btn btn-primary mb-3">
            <i class=" fa fa-plus"></i>
            Tambah  Data</a>
            
        <table  id ="dt" class="table align-middle  table-bordered  table-hover">
            <thead>
            <tr>
                
                <th><center>No</center></th>
                <th><center>ID NASABAH</center></th>
                <th>NAMA NASABAH</th>
                <th>JENIS</th>
                <th>DIVISI</th>
                <th>TRANSAKSI</th>
                <th>TANGGAL SIMPAN</th>
                <th>STATUS</th>
                <th width="200">Action</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            $simpanan = mysqli_query($connect," select *from simpanan");
            while($row=mysqli_fetch_array($simpanan)){
            ?>
            <tr>
                <th><center><?php echo $nomor;?></center></td>
                <td><center><?php echo $row['id_nasabah']?></center></td>
                <td><?php echo $row['Nama']?></td>
                <td><?php echo $row['jns']?></td>
                <td><?php echo $row['divisi']?></td>
                <td><?php echo $row['transaksi']?></td>
                <td><?php echo $row['tgl_simpan']?></td>
                <td><?php echo $row['status']?></td>
            
                <td>
                    <a href="edit_simpanan.php?id_nasabah=<?php echo $row['id_nasabah'];?>" class="btn btn-success btn-sm">
                    <i class =" fa fa-pencil"></i></a>
                    <a href="delete_simpanan.php?id_nasabah=<?php echo $row['id_nasabah'];?> " class="btn btn-danger btn-sm">
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

   
