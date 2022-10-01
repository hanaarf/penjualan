<?php
    include 'koneksi.php';

    if(isset($_GET['nomor'])){
        header ('location:lpdatahero.php');
    }

    $nomor =$_GET['nomor'];

    $sql = "DELETE FROM `hero` WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: lpdatahero.php');
    }else{
        header('Location: lphapushero.php?status=gagal');
    }
?>
