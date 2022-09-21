<?php
    include "koneksi.php";

    if(isset ($_POST ['simpan'])){
    $nisn=$_POST['nisn'];
    $nama_siswa=$_POST['nama_siswa'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];

    $sql = "UPDATE data_siswa SET nama_siswa='$nama_siswa', kelas='$kelas', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE nisn='$nisn'";
    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location: Data-siswa.php');
    }else{
        header('Location: edit-siswa.php?status=gagal');
    }
}
?>