<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="css/dashboard.css">
   
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Hollywings</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Hollywings</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="#" class="nav-link">
              <span class="material-symbols-outlined">
                dashboard</span>
                <span class="link">Dashboard</span>
              </a>
            </li>
            <li class="list">
              <a href="dataorder.php" class="nav-link">
                <img src="Frame.png" alt="">
                <span class="link">All Order</span>
              </a>
            </li>
            <li class="list">
              <a href="datamenu.php" class="nav-link">
                <img src="menu.png" alt="">
                <span class="link">All Menu</span>
              </a>
            </li>
            <li class="list">
              <a href="datacustomer.php" class="nav-link">
                <img src="customer.png" alt="">
                <span class="link">Data Customer</span>
              </a>
            </li>

            <div class="admin">
              <img src="Ellipse 2.png" alt="" class="bulet">
              <span class="tulisan">Admin</span>
            </div>

            <div class="logout">
              <img src="log out.png" alt="">
              <span class="tulisan">Log out</span>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section class="overlay"></section>

    <div class="tampilan">
      <div class="dasboard">
        <span class="teks">Dasboard</span>
        <p id="jam"></p>
     </div> 

      <div class="search">
        <button class="ntf"><img src="notification.png" alt="" class="notifikasi"></button>
      </div>
      <div class="search1">
        <input type="text" class="input"><button class="src"><img src="icon search.png" alt="" class="cari"></button>
      </div>

      <div class="semua">
        <div class="totalmenu">
          <p class="total">Total Menu</p>
        </div>

        <div class="totalmenu">
          <p class="total">Total Order</p>
        </div>

        <div class="totalmenu">
          <p class="total">Total Pelanggan</p>
        </div>
      </div>

    </div>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
  </body>
</html>