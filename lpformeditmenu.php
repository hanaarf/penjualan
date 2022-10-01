<?php
    include 'koneksi.php';

    $nomor = $_GET['nomor'];
    $sql = "SELECT * FROM lp_menu WHERE nomor='$nomor'";
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
                    <li class="home"><a href="dashboard/index.html">Dashboard</a></li>
                    <li> /  Edit Menu</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ubah"><h1>Ubah Data Menu</h1></div>
    <hr>
    
    <form action="lpeditmenu.php" method="post">
        
    <div class="kanankiri">
        <div class="kanan">
        <p><label class="p">Nomor : <input type="number" class="input" name="nomor" value="<?php echo $data['nomor'] ?>" required="required"></label></p>

        <p><label class="p">Gambar : <input type="text" class="input" name="gambar" value="<?php echo $data['gambar'] ?>"  required="required"></label></p>

        
        </div>

        <div class="kiri">
        <p><label class="p">Judul : <input type="text" class="input" name="judul" value="<?php echo $data['judul'] ?>" required="required"></label></p>


        <p><label class="p">Teks :  <input type="text" class="input" name="teks" value="<?php echo $data['teks'] ?>" required="required"></label></p>
        

        </div>
    </div>

        <input type="submit" class="submit" name="simpan" value="simpan">
    </form>


</body>
</html>