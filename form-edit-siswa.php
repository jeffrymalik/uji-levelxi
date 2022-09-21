<?php
    include "koneksi.php";
    $nisn = $_GET['nisn'];
    $sql = "SELECT * FROM data_siswa where nisn='$nisn'";
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
    <link rel="stylesheet" href="Stylesiswa.css">
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
        <h1>FORM EDIT SISWA</h1>
    </div>
    <div class="content-edit">
        <form method="post" action="edit-siswa.php">
            <div class="bungkus-2">
                <table>
                    <tr>
                        <td><p>NAMA SISWA :</p></td>
                        <td> <input type="text" name="nama_siswa" value="<?php echo $data ['nama_siswa'] ?>" required="required"></td>
                    </tr>
                    <tr>
                        <td><p>KELAS : </p></td>
                        <td><input type="text" name="kelas" value="<?php echo $data ['kelas'] ?>"required="required"></td>
                    </tr>
                    <tr>
                        <td><p>ALAMAT : </p></td>
                        <td><input type="text" name="alamat" value="<?php echo $data ['alamat']?>" required="required"><td>
                    </tr>
                    <tr>
                        <td><p>JENIS KELAMIN :</td>
                        <td><div class="bungkusaja"><input type="radio" name="jenis_kelamin" value="laki-laki" required="required">laki-laki <input type="radio" name="jenis_kelamin" value="perempuan" required="required">perempuan</td></div>
                    </tr>
                </table>  
            </div>
            <input type="hidden" name="nisn" value="<?php echo $data ['nisn'] ?>">  
            <input id="save" type="submit" name="simpan" value="SAVE">
            <div class="tombol-2"><a class="back-2" href="Data-barang.php">CANCEL</a></div>
        </form>
            
    </div>
</div>
</body>
<html>
