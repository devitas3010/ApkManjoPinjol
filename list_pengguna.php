<?php
include 'header.php';
?>

      <div class="container" style="margin-top: 50px;">
        <h4>Data Pengguna</h4>
        <a href="tambah_pengguna.php" class="btn btn-info">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>id</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            $pengguna = mysqli_query($connect,"select * from pengguna");
            while($row=mysqli_fetch_array($pengguna)){
            ?>
            <tr>
                <th><?php echo $nomor;?></td>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['Nama']?></td>
                <td><?php echo $row['Username']?></td>
                <td><?php echo $row['Password']?></td>
                <td>
                    <a href="edit_pengguna.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">
                    <i class =" fa fa-pencil"></i>
                    Edit</a>
                    <a href="delete_pengguna.php?id=<?php echo $row['id'];?> " class="btn btn-warning btn-sm">
                    <i class=" fa fa-trash"></i>
                    Delete</a>
                </td>
            </tr>
            <?php
        $nomor++;
            }
            ?>
            </tbody>
        </table>

        </div>
        <?php
        include 'foother.php';
        ?>




   
