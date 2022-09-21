<?php
    include"koneksi.php";

    if (isset($_POST["simpan"])){
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $stock_barang = $_POST['stock_barang'];

        $sql = "INSERT INTO data_barang (kode_barang, nama_barang, jenis_barang, jumlah_barang, stock_barang) VALUES ('$kode_barang', '$nama_barang', '$jenis_barang', '$jumlah_barang', '$stock_barang')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location:Data-barang.php');
        }else{
            header('Location:simpan.php?status=gagal');
        }
    }
?>