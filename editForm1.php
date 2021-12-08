<html>
<head>
</head>
<body>
    <?php
        include "koneksi1.php";

        $id=$_GET['nim'];
        $query="SELECT * FROM pendaftaran WHERE nim='$nim'";
        $result=mysqli_query($connect, $query);
    ?>
    <form action="prosesEdit.php" method="GET">
    <table>
        <?php
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> Nim: </td>
            <td> <input type="text" name="nim" value="<?php echo 
            $row['nim'];?>">
        </tr>
        <tr>
            <td> Nama: </td>
            <td> <input type="text" name="name" value="<?php 
            echo $row['name'];?>"> </td>
        </tr>
        <tr>
            <td> Jenis Kelamin: </td>
            <td> <input type="text" name="jeniskelamin" value="<?php 
            echo $row['jeniskelamin'];?>"> </td>
        </tr>
        <tr>
            <td> Tempat Lahir: </td>
            <td> <input type="text" name="tempatlahir" value="<?php 
            echo $row['tempatlahir'];?>"> </td>
        </tr>
        <tr>
            <td> Tanggal Lahir: </td>
            <td> <input type="text" name="tanggallahir" value="<?php 
            echo $row['tanggallahir'];?>"> </td>
        </tr>
        <tr>
            <td> Alamat: </td>
            <td> <textarea name="alamat" rows="5" cols="20">
            <<?php echo $row['alamat'];?></textarea></td>
        </tr>
        <tr>
            <td> Kota: </td>
            <td> <input type="text" name="kota" value="<?php 
            echo $row['kota'];?>"> </td>
        </tr>
        <tr>
            <td> Username: </td>
            <td> <input type="text" name="username" value="<?php 
            echo $row['username'];?>"> </td>
        </tr>
        <tr>
            <td> Password: </td>
            <td> <input type="text" name="password" value="<?php 
            echo $row['password'];?>"> </td>
        </tr>
        <tr>
            <td> Agama: </td>
            <td> <input type="text" name="agama" value="<?php 
            echo $row['agama'];?>"> </td>
        </tr>
        <tr>
            <td> <input type="submit" name="simpan" value="Simpan"></td>
        </tr>
        <?php
            }
        ?>
    </table>
    </form>
</body>
</html>