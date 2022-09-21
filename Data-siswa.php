<?php
    include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarpras</title>
    <link rel="stylesheet" href="Stylesiswa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

</body>
    <div class="container">
        <div class="Side-bar">
            <div class="logo">
                <img src="asset/logo.png" height="50px" alt="LOGO">
                <h3>INVE<span>TO</span></h3>
            </div>
            <div class="nav">
                <div><i class="fa-solid fa-house"></i><a href="tampilan.html">HOME</a></div>
                <div><i class="fa-solid fa-warehouse"></i><a href="Data-barang.php">DATA BARANG</a></div>
                <div><i class="fa-solid fa-id-card"></i><a href="Data-siswa.php">DATA SISWA</a></div>
            </div>
        </div>
    </div>
    <div class="header">
        <h1>DATA SISWA</h1>
    </div>
    <div class="content">
        <div><a href="form-add-siswa.html">[+]ADD NEW</a></div>
        <table>
            <tr>
                <th>NISN</th>
                <th>NAMA SISWA</th>
                <th>KELAS</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>ACTION</th>
            </tr>
            <?php
            $sql = "SELECT * FROM data_siswa";
            $query = mysqli_query($connect,$sql);

            while ($data=mysqli_fetch_array($query)){
                echo"
                    <tr>
                        <td>$data[nisn]</td>
                        <td>$data[nama_siswa]</td>
                        <td>$data[kelas]</td>
                        <td>$data[alamat]</td>
                        <td>$data[jenis_kelamin]</td>
                        <td>
                            <a href='form-edit-siswa.php?nisn=".$data['nisn']."'>Edit</a>
                            <a href='hapus-siswa.php?nisn=".$data['nisn']."'>Hapus</a>
                        </td>
                    </tr>
                ";
            }
            ?>
        </table>
    </div>
    
</body>
</html>