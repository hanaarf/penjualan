<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eSHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet"> 

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
                <div><a href="order.html">Order</a></div>
             </div>
          </div>
       
          <!--hero-->
          <div class="about" id="hero">
               <span class="material-symbols-outlined">arrow_back</span>
               <img src="img/ " alt="">
          
               <div class="text-about">
                    <p class="judul">SPEKTA september ekstra</p>
                    <p>8 Chruncy Wings Louisiana Rub FREE 8 Boneless Wings (any flavor)</p>
          
                    <button class="order"><a href="order.html">Order</a></button>
               </div>
               <span class="material-symbols-outlined">arrow_forward</span>
        </div>

    
                            <!--pilihan-->
                         <div class="semua" id="menu">
                              <div class="container1">
                                   <div class="box1">
                                        <img src="img/">
                                   </div>

                                   <div class="div">
                                        <p class="deskripsi">Chrunchy  Wings  Fries Meal</p>
                                        <p class="deskripsi1">5 Crunchy Wings + Fries + Drink</p>
                                        <button class="order"><a href="order.html">Order</a></button>
                                   </div>
                              </div>

                              <div class=container2>
                                   <div class="box2">
                                        <img src="img/">
                                   </div>

                                   <div class="div">
                                        <p class="deskripsi">Party Set 12 Mixed</p>
                                        <p class="deskripsi1">6 Chrunchy Wings & 6 Boneless Wings</p>
                                        <button class="order1"><a href="order.html">Order</a></button>
                                   </div>
                              </div>

                              <div class=container3>
                                   <div class="box3">
                                        <img src="img/">
                                   </div>

                                   <div class="div">
                                        <p class="deskripsi">Claasic Wings Cajun Rice Meal</p>
                                        <p class="deskripsi1">5 Classic Wings + Cajun Rice +Drink</p>
                                        <button class="order"><a href="order.html">Order</a></button>
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