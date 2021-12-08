<?php
    include "koneksi1.php";

    $username = $_POST['username'];
    $password =$_POST['password'];

    $query = "SELECT * FROM pendaftaran WHERE username='$username' 
    and password='$password'";
    $result=mysqli_query($connect,$query);
    $cek =mysqli_num_rows($result);
    echo $password;
    echo $username;

    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';  
        ?>
        Anda berhasil Login
        <a href="selectTable1.php">Tabel</a><?php
    }else{
        ?>
        Gagal login, silahkan login lagi
        <a href="sessionLoginForm1.html">Halama Login</a> <?php
        echo mysqli_error($connect);
    }
?>