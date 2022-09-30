<?php
    include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Order</title>

    <link rel="stylesheet" href="css/datacustomer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet"> 


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    
<div class="smuanya">
        <div class="kiri">
            <div class="kiriatas">
            <div class="logo"></div>
                <h1>Hollywings</h1>
            </div>

            <div class="kiribawah">
                 <a href="dashboard.php">
                 <span class="material-symbols-outlined">
                dashboard</span>
                Dashboard</a> 
                 
                 <a href="dataorder.php">
                 <span class="material-symbols-outlined">
                event_note</span>
                All Order</a> 

                 <a href="datamenu.php">
                    <span class="material-symbols-outlined">
                        restaurant_menu</span>
                    All Menu</a>

                 <a href="#.php">
                    <span class="material-symbols-outlined">
                    badge</span>
                    Data Customer</a>
            </div>
        </div>

        <div class="kanan">
            <div class="kananatas">
                <p>Data Pelanggan</p>           
                <hr>
            </div>
            <div class="kananbawah">


            <center>
            <table cellpadding="15" cellspacing="0" width = 950px >
                <tr height = 60px>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
            

                <?php
                $sql = "SELECT * FROM `pelanggan`";
                $query = mysqli_query ($connect,$sql);
                while($data= mysqli_fetch_array ($query)){
                    echo "
                <tr height = 50px class='data'>
                    <td>$data[nik]</td>
                    <td>$data[nama_lengkap]</td>
                    <td>$data[alamat]</td>
                    <td>$data[telepon]</td>
                    <td>
                        <a href=''>Edit </a> 
                        <a href=''>Hapus</a>
                    </td>
                </tr>
                    ";
                }
                ?>
            </table>
            </center>

            </div>
        </div>
    </div>
    


</body>
</html>