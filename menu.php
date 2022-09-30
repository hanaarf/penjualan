<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $kode = $_POST['kode'];
        $nama_menu = $_POST['nama_menu'];
        $harga = $_POST['harga'];
        $kategori = $_POST['kategori'];
       

        $sql = "INSERT INTO menu VALUES ('$kode','$nama_menu','$harga','$kategori')";
        $query = mysqli_query ($connect, $sql);

        if($query){
            header('location: datamenu.php');
        }else{
            header('location: menu.php?status=gagal');
        }
    }
?>