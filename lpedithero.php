<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:lpdatahero.php');
    }
        $nomor = $_POST['nomor'];
        $gambar = $_POST['gambar'];
        $judul = $_POST['judul'];
        $teks = $_POST['teks'];
       
    $sql = "UPDATE `hero` SET `nomor`='$nomor',`gambar`='$gambar',`judul`='$judul',`teks`='$teks' WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: lpdatahero.php ');
    }else{
        header('Location: lpedithero.php?status=gagal');
    }
?>