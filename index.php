<?php
include 'header.php'
?>
             

        <div class="container" style="margin-top: 50px;">
        <h4 class="mt-4"> Data Nasabah</h4>
        <a href ="tambah_nasabah.php" class="btn btn-primary mb-3">
            <i class=" fa fa-plus"></i>
            Tambah  Data</a>
            
        <table  id ="dt" class="table align-middle  table-bordered  table-hover">
            <thead>
            <tr>
                <th><center>No</center></th>
                <th>id_nasabah</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Masuk</th>
                <th>Nomor HP</th>
                <th>Jenis kelamin</th>
                <th>Keanggotaan</th>
                <th width="200">Action</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            $nasabah = mysqli_query($connect," select *from nasabah");
            while($row=mysqli_fetch_array($nasabah)){
            ?>
            <tr>
                <th><center><?php echo $nomor;?></center></td>
                <td><?php echo $row['id_nasabah']?></td>
                <td><?php echo $row['Nama']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['tgl_masuk']?></td>
                <td><?php echo $row['nomor_hp']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['keanggotaan']?></td>
            
                <td>
                    <a href="edit_nasabah.php?id_nasabah=<?php echo $row['id_nasabah'];?>"   class="btn btn-success btn-sm">
                    <i class =" fa fa-pencil"></i> </a>
                    <a href="delete_nasabah.php?id_nasabah=<?php echo $row['id_nasabah'];?>"  class="btn btn-danger btn-sm">
                    <i class=" fa fa-trash"></i>
                     </a>    
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

   
