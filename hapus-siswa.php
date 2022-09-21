<?php
    include "koneksi.php";

    if(isset($_GET['nisn'])){
        header('Location: Data-siswa.php');
    }

    $nisn=$_GET['nisn'];
    $sql = "DELETE FROM data_siswa WHERE nisn='$nisn'";
    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location: Data-siswa.php');
    }else{
        header('Location: hapus-siswa.php?status=gagal');
    }
?>