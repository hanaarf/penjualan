<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:datamenu.php');
    }
        $kode = $_POST['kode'];
        $nama_menu = $_POST['nama_menu'];
        $harga = $_POST['harga'];
        $kategori = $_POST['kategori'];
        
       
    $sql = "UPDATE `menu` SET `kode`='$kode',`nama_menu`='$nama_menu',`harga`='$harga',`kategori`='$kategori' WHERE kode='$kode'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: datamenu.php ');
    }else{
        header('Location: editmenu.php?status=gagal');
    }
?>