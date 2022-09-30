<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nik = $_POST['nik'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
       

        $sql = "INSERT INTO pelanggan VALUES ('$nik','$nama_lengkap','$alamat','$telepon')";
        $query = mysqli_query ($connect, $sql);

        if($query){
            header('location: datacustomer.php');
        }else{
            header('location: customer.php?status=gagal');
        }
    }
?>