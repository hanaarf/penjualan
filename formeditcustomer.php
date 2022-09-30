<?php
    include 'koneksi.php';

    $nik = $_GET['nik'];
    $sql = "SELECT * FROM pelanggan WHERE nik='$nik'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="css/formeditorder.css">
</head>
<body>
    <div class="menubar">
        <div class="container">
            <div class="logo">
            
                <h1>Hollywings</h1>
            </div>
            <div class="menu">
                <ul>
                    <li class="home"><a href="dashboard.php">Dashboard</a></li>
                    <li> /  Edit data</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ubah"><h1>Ubah Data Pelanggan</h1></div>
    <hr>
    
    <form action="editcustomer.php" method="post">
        
    <div class="kanankiri">
        <div class="kanan">
        <p><label class="p">nik : <input type="number" class="input" name="nik" value="<?php echo $data['nik'] ?>" required="required"></label></p>

        <p><label class="p">nama lengkap : <input type="text" class="input" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>"  required="required"></label></p>

        
        </div>

        <div class="kiri">
        <p><label class="p">alamat : <input type="text" class="input" name="alamat" value="<?php echo $data['alamat'] ?>" required="required"></label></p>


        <p><label class="p">telepon :  <input type="text" class="input" name="telepon" value="<?php echo $data['telepon'] ?>" required="required"></label></p>
        

        </div>
    </div>

        <input type="submit" class="submit" name="simpan" value="simpan">
    </form>


</body>
</html>