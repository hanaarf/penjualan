<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nomor = $_POST['nomor'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $menu = $_POST['menu'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        

        $sql = "INSERT INTO detail_pesan  VALUES ('$nmor','$nama_pelanggan','$menu','$harga','$jumlah')";
        $query =  mysqli_query ($connect, $sql);


        
    }
?>