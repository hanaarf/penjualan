<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:lpdatamenu.php');
    }
        $nomor = $_POST['nomor'];
        $gambar = $_POST['gambar'];
        $judul = $_POST['judul'];
        $teks = $_POST['teks'];
       
    $sql = "UPDATE `lp_menu` SET `nomor`='$nomor',`gambar`='$gambar',`judul`='$judul',`teks`='$teks' WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: lpdatamenu.php ');
    }else{
        header('Location: lpeditmenu.php?status=gagal');
    }
?>