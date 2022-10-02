<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hollywings</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/hw.jpeg">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eSHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="css/landingpage.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>

    
    <!--navbar-->
        <div class="navbar">
               <div class="gambar">
                    <img src="img/logo.png">
               </div>
                    <p>Hollywings</p>
               

             <div class="nav-link">
                <div><a href="#hero">Home</a></div>
                <div><a href="#menu">Menu</a></div>
                <div><a href="">About</a></div>
                <div><a href="">Review</a></div>
             </div>
          </div>
       
          <!--hero-->
          <div class="about" id="hero">
          <span class="material-symbols-outlined">arrow_back</span>
          <?php
                $sql = "SELECT * FROM `hero`";
                $query = mysqli_query ($connect,$sql);
                while($hero= mysqli_fetch_array ($query)){
                    echo "
                    
                    
                    
                    <img src='img/$hero[gambar] '
                    
                    <h3> $hero[judul]</h3><br>
                    <p>$hero[teks]</p><br>
                    ";
                }
          ?>

          <div class="garis"><span class="material-symbols-outlined">arrow_forward</span></div>
               
            
          </div>
          <button class="order" id="tblh" ><a href="">More</a></button>
        
               
    


     <!--pilihan-->
          <div  id="menu">
               <div class="container1">
               <?php
                    $sql = 'SELECT * FROM `lp_menu` WHERE nomor="1"';
                    $query = mysqli_query ($connect,$sql);
                    while($data= mysqli_fetch_array ($query)){
                              echo "
                                   <img src='img/$data[gambar] ' height='130px' >
                                   <h3>$data[judul]</h3>
                                   <p>$data[teks]</p>
                                   ";
                                   }
               ?>
               <button class="order"><a href="order.html">Order</a></button>

               <div class="box1"></div>
               <div class="div">
                    <p class="deskripsi"></p>
                    <p class="deskripsi1"></p>
                    
               </div>
               </div>

               
               
               <div class=container2>
                    <?php
                         $sql = 'SELECT * FROM `lp_menu` WHERE nomor="2"';
                         $query = mysqli_query ($connect,$sql);
                         while($data= mysqli_fetch_array ($query)){
                         echo "
                              <img src='img/$data[gambar] ' height='130px' >
                              <h3>$data[judul]</h3>
                              <p>$data[teks]</p>
                              ";
                         }
                    ?>
                         <button class="order1"><a href="order.html">Order</a></button>

                                   <div class="box2"></div>

                                   <div class="div">
                                        <p class="deskripsi"></p>
                                        <p class="deskripsi1"></p>
                                   </div>
               </div>



               <div class=container3>
                    <?php
                         $sql = 'SELECT * FROM `lp_menu` WHERE nomor="3"';
                         $query = mysqli_query ($connect,$sql);
                         while($data= mysqli_fetch_array ($query)){
                         echo "
                              <img src='img/$data[gambar] ' height='130px' >
                              <h3>$data[judul]</h3>
                              <p>$data[teks]</p>
                              ";
                         }
                    ?>
                         <button class="order"><a href="order.html">Order</a></button>

                                   <div class="box3"></div>

                                   <div class="div">
                                        <p class="deskripsi"></p>
                                        <p class="deskripsi1"></p>  
                                   </div>
               </div>

          </div>

     <!--About-->
     <div class="aboutus">
          <div class="judul">
               <span class="material-symbols-outlined">
               horizontal_rule
               </span> 
               <h3>About Us</h3>
          </div>

          <div class="tengahkiri">
               <h1>The Best Quality Food On Your City</h1>
               <p>A plenitude of Food Trucks are out there, bringing the world another frame of mind towards life. In Denver, as well, Food Trucks have overwhelmed urban communities and areas. The application range of the thoughtful and frequently fascinating gastronomy and cooking mobiles is practically boundless.</p>
          </div>
          <div class="tengahkanan">
               <img src="img/gbr12.jpg" width="390px">
          </div>
          <div class="bawah">
               <div class="kotak">
                    <div class="kotak1"></div>
                    <div class="kotak2"></div>
                    <div class="kotak3"></div>
               </div>
          </div>
     </div>

          

     <!-- footer -->

     <div class="header">
          <div class="footer-col">
               <h4>Ikuti kami</h4>
               <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
               </div>
          </div>
          <div class="footer-col">
               <h4>About Us</h4>
               <div class="link">
                    <a href="#">Tentang</a><br>
                    <a href="#">Penawaran & Promo Spesial</a><br>
                    <a href="#">Great Food</a><br>
                    <a href="#">Hubungi Kami</a><br>
               </div>
          </div>
          <div class="footer-col">
               <h4>Help</h4>
               <div class="link">
                    <a href="#">Contact Us</a><br>
                    <a href="#">Telp : +62 1234-5678</a><br>
                    <a href="#">Email : hollywings@gmail.com</a><br>
               </div>
          </div>
     </div>

    

</body> 
</html>