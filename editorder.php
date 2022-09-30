<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:dataorder.php');
    }
        $nomor = $_POST['nomor'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $menu = $_POST['menu'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
       
    $sql = "UPDATE `detail_pesan` SET `nomor`='$nomor',`nama_pelanggan`='$nama_pelanggan',`menu`='$menu',`harga`='$harga',`jumlah`='$jumlah' WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: dataorder.php ');
    }else{
        header('Location: editorder.php?status=gagal');
    }
?>