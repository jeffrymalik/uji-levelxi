<?php
    include"koneksi.php";

    if (isset($_POST["simpan"])){
        $nisn = $_POST['nisn'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        $sql = "INSERT INTO data_siswa  VALUES ('$nisn', '$nama_siswa', '$kelas', '$alamat', '$jenis_kelamin')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location:Data-siswa.php');
        }else{
            header('Location:simpan.php?status=gagal');
        }
    }
?>