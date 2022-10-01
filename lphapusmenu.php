<?php
    include 'koneksi.php';

    if(isset($_GET['nomor'])){
        header ('location:lpdatamenu.php');
    }

    $nomor =$_GET['nomor'];

    $sql = "DELETE FROM `lp_menu` WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: lpdatamenu.php');
    }else{
        header('Location: lphapusmenu.php?status=gagal');
    }
?>
