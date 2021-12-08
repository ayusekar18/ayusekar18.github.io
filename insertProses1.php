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

    $sql = "INSERT INTO pendaftaran(nim, nama, jeniskelamin, tempatlahir, tanggallahir,
        alamat, kota, username, password, agama)
        VALUE ('$nim','$nama','$jeniskelamin','$tempatlahir','$tanggallahir',
        '$alamat','$kota','$username','$password','$agama')";
    ?>
        <a href="sessionLoginForm1.html">Login</a>
    <?php
        mysqli_close($connect);
    ?>