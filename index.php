<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K-zone</title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        transition: background-color 0.5s, color 0.5s;
        color: black;
      }
      body.dark-mode{
        background-color: rgb(39, 39, 39);
        color: lightgrey;
      }
       /* Styling for the shop section */
       .shop-section {
        text-align: center;
        padding: 50px 0;
      }

      .shop-title {
        font-size: 48px;
        color: violet;
        letter-spacing: 4px;
      }

      /* Styling for the product cards */
      .product-cards {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
        flex-wrap: wrap;
      }

      .product-card {
        background-color: #333;
        color: #ffc8d3;
        width: 200px;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .product-card:hover {
        transform: scale(1.08); /* Scale up on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow effect */
      }

      .product-card img {
        width: 100%;
        border-radius: 10px;
        transition: transform 0.5s ease; /* Smooth image transition */
      }

      .product-card:hover img {
        transform: scale(1.1); /* Slightly scale up the image on hover */
      }

      .product-title {
        font-size: 18px;
        margin-top: 10px;
      }

      .product-price {
        font-size: 16px;
        color: #fff;
        margin: 5px 0;
      }

      /* Button styling */
      .shop-button {
        color: #333;
        background-color: #ffc8d3;
        padding: 5px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s ease;
      }

      .shop-button:hover {
        background-color: violet;
      }
      .shop-icon {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
        color: #ffc8d3;
        cursor: pointer;
      }
      .card-titlee {
        font-size: 48px;
        color:black;
        letter-spacing: 4px;
        background-color: red;

      }
    .navbar-brand {
      color: white;
    }
  .navbar .nav-link {
    color: white;
  }
    .navbar .navlink:hover {
      color:#f8f9fa
    }
    .navbar-toggler-icon{
      background-color: pink;
    }
    #darkmodeicon {
      color:white;
    }
    </style>
  </head>
  <body>
  <!-- nav begin -->
  <nav class="navbar navbar-expand-lg bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">K-Zone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-light">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
                <li>
                <button id="darkmodebutton" class="btn btn-link text-light"><i class="bi bi-moon-stars-fill"></i></button>
            </li>
            <li class="nav-item">
                <button id="lightmodebutton" class="btn btn-link text-light"><i class="bi bi-brightness-high-fill"></i></button>
            </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <section id="hero" class="text-start p-5 bg-dark text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center text-light">
                <img src="https://images.justwatch.com/backdrop/309462806/s640/season-1" class="img-fluid" width="300">
                <div>
                    <h3 class="fw-bold display-7" ></h1>LETS WATCH DRAMA</h3>
                    <h2 class="lead display-6"><b>Search your favorite drama  Here! And Enjoy the drama </b></h2>
                      <span id="tanggal"></span>
                      <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
      </section>
      
    <!-- hero end -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Actor/Actris</h1>
            <div class="row row-cols-1 row-cols-md-3 g-5 justify-content-center" >
                <div class="col">
                  <div class="card h-100">
                    <img src="https://asianwiki.com/images/8/8f/Kim_Sun-Ho-1986-p1.jpg" class="card-img-top" alt="gambar1">
                    <div class="card-body">
                      <h5 class="card-title">Kim seonho</h5>
                      <p class="card-text">Drama:Start-up,Hometown Cha-cha-cha,Tyrant</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary"></small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="img\songkang7.jpg" class="card-img-top" alt="gambar2">
                    <div class="card-body">
                      <h5 class="card-title">Songkang</h5>
                      <p class="card-text">Drama: My Demon,Nevertheless,Sweet Home</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary"></small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="https://cdn0-production-images-kly.akamaized.net/mOPms673qIPHGR-REyKiTdUa8nc=/500x667/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4833341/original/096926800_1715831482-b_1.jpg" class="card-img-top" alt="gambar3">
                    <div class="card-body">
                      <h5 class="card-title">Byon Won-seok</h5>
                      <p class="card-text">Drama:Lovely Runner,20th Century Girl</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary"></small>
                    </div>
                  </div>
                </div>
    </section>
    <section id="article" class="text-center p-5">
      <div class="container">
          <div class="row row-cols-1 row-cols-md-3 g-5 justify-content-center" >
              <div class="col">
                <div class="card h-100">
                  <img src="https://cdn0-production-images-kly.akamaized.net/p-fhoP9BQFtT7NvFYJdJNYtibvQ=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4257722/original/098445300_1670809550-Bae_Suzy.jpeg" class="card-img-top" alt="gambar1">
                  <div class="card-body">
                    <h5 class="card-title">Bae Suzy</h5>
                    <p class="card-text">Drama:Start-up,Doona</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondar"></small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="https://lifestyle.haluan.co/wp-content/uploads/2024/02/kim-yoo-jung-4-1152x1466.jpg" class="card-img-top" alt="gambar2">
                  <div class="card-body">
                    <h5 class="card-title">Kim You-jung</h5>
                    <p class="card-text">Drama:My demon,20th ceentury girl</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary"></small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="https://i.pinimg.com/474x/c5/6c/60/c56c6044ea86129d330d42843724ab96.jpg" class="card-img-top" alt="gambar2">
                  <div class="card-body">
                    <h5 class="card-title">Kim Hyeyon</h5>
                    <p class="card-text">Drama:Lovely Runner</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary"></small>
                  </div>
                </div>
              </div>
                  </div>
                </div>                  
            </div>
      </div>
  </section>

    <!-- article end -->
  
              
             <!-- gallery begin -->
    <section id="gallery" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">GALLERY</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://i.pinimg.com/originals/a5/21/30/a5213041209095060cd2c94e460d0e5f.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.pinimg.com/736x/82/68/45/826845f2f48613682e8eafe990798f25.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.pinimg.com/736x/83/a2/56/83a256cc10407c48fb3a8d26e1b249b0.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.pinimg.com/736x/32/62/e8/3262e801fa7a19fad9e206bffde75950.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.pinimg.com/originals/66/6d/87/666d87c65a3bbca0e50b1a53ce3bd677.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                 <!-- Gallery End -->
    <!-- footer begin -->
    <footer class="text-center p-5">
    <div>
        <a href=""><i class="bi bi-instagram h2 p-2 text-dark"></i>
        <a href=""><i class="bi bi-twitter h2 p-2 text-dark"></i>
        <a href=""><i class="bi bi-whatsapp h2 p-2 text-dark"></i>
        <a href=""><i class="bi bi-spotify h2 p-2 text-dark"></i>
    </div>
   

    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">

      // Fungsi untuk mode gelap dan terang
    document.getElementById("darkmodebutton").addEventListener("click", function () {
      document.body.classList.add("dark-mode");
    });
    
    document.getElementById("lightmodebutton").addEventListener("click", function () {
      document.body.classList.remove("dark-mode");
    });

      window.setTimeout("tampilWaktu(),1000");

      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()",1000);
        document.getElementById("tanggal").innerHTML =  
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML=
        waktu.getHours() +
        ":" +
        waktu.getMinutes() +
        ":" +
        waktu.getSeconds();
      }
    </script>
  </body>
</html>