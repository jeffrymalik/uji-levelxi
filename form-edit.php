<?php
    include "koneksi.php";
    $kode_barang = $_GET['kode_barang'];
     $sql = "SELECT * FROM data_barang WHERE kode_barang='$kode_barang'";
     $query = mysqli_query($connect, $sql);
     $data = mysqli_fetch_assoc($query);

     if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarpras</title>
    <link rel="stylesheet" href="Stylebarang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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
    <div class="header">
        <h1>FORM EDIT DATA BARANG</h1>
    </div>
    <div class="content-edit">
        <form method="POST" action="edit.php">
            <div class="bungkus-2">
                <table>
                    <tr>
                        <td><p>NAMA BARANG :</p></td>
                        <td> <input type="varchar" name="nama_barang" value="<?php echo $data ['nama_barang'] ?>" required="required"></td>
                    </tr>
                    <tr>
                        <td><p>JENIS BARANG :</p></td>
                        <td><input type="varchar" name="jenis_barang" value="<?php echo $data ['jenis_barang'] ?>" required="required"></td>
                    </tr>
                    <tr>
                        <td><p>JUMLAH BARANG : </p></td>
                        <td><input type="number" name="jumlah_barang" value="<?php echo $data ['jumlah_barang'] ?>" required="required"></td>
                    </tr>
                    <tr>
                        <td><p>STOCK BARANG : </p></td>
                        <td><input type="number" name="stock_barang" value="<?php echo $data ['stock_barang'] ?>" required="required"></td>
                    </tr>
                </table>
            </div>
            <input type="hidden" name="kode_barang" value="<?php echo $data ['kode_barang'] ?>">
            <input id="save" type="submit" name="simpan" value="save">
            <div class="tombol-2"><a class="back-2" href="Data-barang.php">CANCEL</a></div>
        </form>
    </div>
</div>
</body>

</html>