<?php
    include 'koneksi.php';

    $kode = $_GET['kode'];
    $sql = "SELECT * FROM menu WHERE kode='$kode'";
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

    <link rel="stylesheet" href="css/formedibuku.css">
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
                    <li> /  Edit Menu</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ubah"><h1>Ubah Data Menu</h1></div>
    <hr>
    
    <form action="editmenu.php" method="post">
        
    <div class="kanankiri">
        <div class="kanan">
        <p><label class="p">kode : <input type="number" class="input" name="kode " value="<?php echo $data['kode'] ?>" required="required"></label></p>

        <p><label class="p">nama menu : <input type="text" class="input" name="nama_menu" value="<?php echo $data['nama_menu'] ?>"  required="required"></label></p>
        </div>


        <div class="kiri">
        <p><label class="p">harga : <input type="text" class="input" name="harga" value="<?php echo $data['harga'] ?>" required="required"></label></p>


        <p><label class="p">kategori :  <input type="text" class="input" name="kategori" value="<?php echo $data['kategori'] ?>" required="required"></label></p>
        

        </div>
    </div>

        <input type="submit" class="submit" name="simpan" value="simpan">
    </form>


</body>
</html>