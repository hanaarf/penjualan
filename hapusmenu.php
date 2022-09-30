<?php
    include 'koneksi.php';

    if(isset($_GET['kode'])){
        header ('location:datamenu.php');
    }

    $kode =$_GET['kode'];

    $sql = "DELETE FROM `menu` WHERE kode='$kode'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: datamenu.php');
    }else{
        header('Location: hapusmenu.php?status=gagal');
    }
?>

