<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pengenalan Bootstrap</title>
        <!-- Menyisipkan Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Menyisipkan Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="sessionLoginForm1.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insertForm1.html">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sessionLogout1.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>TanggaL Lahir</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Username</th>
            <th>Password</th>
            <th>Agama</th>
            <th>Aksi</th>

        </tr>
        <?php
            include "koneksi1.php";

            $query = "SELECT * FROM pendaftaran";
            $result = mysqli_query($connect , $query);

            if (mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $row["nim"] ?></td>
            <td> <?php echo $row["nama"] ?></td>
            <td> <?php echo $row["jeniskelamin"] ?></td>
            <td> <?php echo $row["tempatlahir"] ?></td>
            <td> <?php echo $row["tanggallahir"] ?></td>
            <td> <?php echo $row["alamat"] ?></td>
            <td> <?php echo $row["kota"] ?></td>
            <td> <?php echo $row["username"] ?></td>
            <td> <?php echo $row["password"] ?></td>
            <td> <?php echo $row["agama"] ?></td>
                <td>
                    <a href="editForm1.php?id=<?php echo $row['nim'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['nim']?>">Hapus</a>
                </td>
        <?php
                }
            }
            else{
                echo "0 results";
            }
        ?>
        </tr>
    </table>
</body>
</html>