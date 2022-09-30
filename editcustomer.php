<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:datacustomer.php');
    }
        $nik = $_POST['nik'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
       
    $sql = "UPDATE `pelanggan` SET `nik`='$nik',`nama_lengkap`='$nama_lengkap',`alamat`='$alamat',`telepon`='$telepon' WHERE nik='$nik'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: datacustomer.php ');
    }else{
        header('Location: editcustomer.php?status=gagal');
    }
?>