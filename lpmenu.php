<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nomor = $_POST['nomor'];
        $gambar = $_POST['gambar'];
        $judul = $_POST['judul'];
        $teks = $_POST['teks'];
       

        $sql = "INSERT INTO lp_menu VALUES ('$nomor','$gambar','$judul','$teks')";
        $query = mysqli_query ($connect, $sql);

        if($query){
            header('location: lpdatamenu.php');
        }else{
            header('location: lpmenu.php?status=gagal');
        }
    }
?>