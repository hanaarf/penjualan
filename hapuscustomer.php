<?php
    include 'koneksi.php';

    if(isset($_GET['nik'])){
        header ('location:datacustomer.php');
    }

    $nik =$_GET['nik'];

    $sql = "DELETE FROM `pelanggan` WHERE nik='$nik'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: datacustomer.php');
    }else{
        header('Location: hapuscustomer.php?status=gagal');
    }
?>

