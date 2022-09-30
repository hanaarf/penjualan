<?php
    include 'koneksi.php';

    if(isset($_GET['nomor'])){
        header ('location:dataorder.php');
    }

    $nomor =$_GET['nomor'];

    $sql = "DELETE FROM `detail_pesan` WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: dataorder.php');
    }else{
        header('Location: hapusorder.php?status=gagal');
    }
?>

