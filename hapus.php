<?php
    include "koneksi1.php";

    $nim=$_GET['nim'];

    $query = "DELETE FROM pendaftaran WHERE nim='$nim'";
    $result = mysqli_query($connect, $query);

    if($result){
        echo "Data berhasil dihapus";
 ?>   
        <a href="selectTable1.php"> Lihat data di Table</a>
<?php
    }
    else{
        echo "Data gagal dihapus" .mysqli_error($connect);
    }
?>