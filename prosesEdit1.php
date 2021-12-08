<?php
    include "koneksi1.php";

    $nim =$_GET['nim'];
    $nama =$_GET['nama'];
    $jeniskelamin =$_GET['jeniskelamin'];
    $tempatlahir =$_GET['tempatlahir'];
    $tanggallahir =$_GET['tanggallahir'];
    $alamat =$_GET['alamat'];
    $kota = $_GET['kota'];
    $username =$_GET['username'];
    $password =$_GET['password'];
    $agama =$_GET['agama'];

    $query = "UPDATE pendaftaran SET nama='$nama', jeniskelamin='$jeniskelamin', tempatlahir='$tempatlahir',
    alamat='$alamat', kota='$kota', username='$username', password='password', agama='$agama' WHERE nim='$nim'";
    $result = mysqli_query($connect,$query);

    if($result){
        echo "Berhasil update data ke database";
?>
    <a href="selectTabel1.php">Lihat data di Tabel</a>
<?php
    }else{
        echo "Gagal update data". mysqli_error($connect);
    }
?>