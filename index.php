<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/landing-page.css">
    <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" 
    rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="./Logo/Logo.png"/>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body id="home">
    <header>
    <!--navigation-->
    
        <section class="navigation">
            <div class="container">
                <div class="box-navigation animate__animated animate__fadeInDown" data-aos-duration="1000" data-aos-delay="300">
                    <div class="box">
                    <img src="./Logo/Logo.png" style="width: 25%;">
                </div>
                <div class="box menu-navigation">
                    <ul>
                        <li>
                            <i class="ri-home-4-line"></i>
                            <a href="#home">Beranda</a>
                        </li>
                        <li>
                            <i class="ri-information-line"></i>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <i class="ri-dashboard-line"></i>
                            <a href="#famous">Famous</a>
                        </li>
                        <li>
                            <i class="ri-image-line"></i>
                            <a href="#gallery">Gallery</a>
                        </li>
                        <li>
                            <i class="ri-login-box-line"></i>
                            <a href=".\Login&Registrasi\login.php">Daftar dan Masuk</a>
                        </li>
                    </ul>
                </div>
                <div class="box menu-bar">
                    <i class="ri-menu-3-fill" style="color: white"></i>
                </div>
            </div>
        </div>
        </section>
    <!--navigation-->
    
    <!--hero-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('./image/Cover1.gif')">
            <div class="carousel-caption d-none d-md-block">
              <h1>SIMPLE TOUR and CULINARY</h1>
              <p></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./image/Cover2.gif')">
            <div class="carousel-caption d-none d-md-block">
              <h1>Desa Wisata</h1>
              <p></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./image/Cover3.gif')">
            <div class="carousel-caption d-none d-md-block">
              <h1>Kuliner</h1>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!--hero-->
    
</header>

<!--about-->
<section class="about" id="about">
    <div class="container">
        <div class="box-about">
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
            <h1>STORY</h1>
            <p>STORY merupakan sebuah aplikasi berbasis web yang bertujuan untuk memperkenalkan dan melestarikan desa wisata beserta UMKM 
                di wilayah Daerah Istimewa Yogyakarta kepada seluruh masyarakat Indonesia maupun Internasional
            </p>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
            <img src="./image/LogoMiring.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--about-->

<!--famous-->
<section class="famous" id="famous">
<div id="particles-js"></div>
    <div class="container"> 
            <div class="box-famous">
                <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                    <img src="..\Landing-page\image\River.gif" alt="">
                    <h1>Ada apa di STORY?</h1>
                    <p></p>
                </div>
                <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                    <img src="..\Landing-page\image\waterfall.gif" alt="">
                    <h1>Desa Wisata</h1>
                    <p>Berbagai macam pilihan Desa Wisata yang dapat kamu kunjungi</p>
                </div>
                <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <img src="..\Landing-page\image\food2.gif" alt="">
                    <h1>Kuliner</h1>
                    <p>Ada juga berbagai makanan khas dari daerah yang ada di Yogyakarta.</p>
                </div>
            </div>
            
    </div>
</section>
<!--famous-->

<!--gallery-->
<section class="gallery" id="gallery">
    <div class="container">
        <div class="bubbles">
                <span style="--i:11;"></span>
                <span style="--i:12;"></span>
                <span style="--i:24;"></span>
                <span style="--i:10;"></span>
                <span style="--i:14;"></span>
                <span style="--i:23;"></span>
                <span style="--i:18;"></span>
                <span style="--i:16;"></span>
                <span style="--i:19;"></span>
                <span style="--i:20;"></span>
                <span style="--i:22;"></span>
                <span style="--i:25;"></span>
                <span style="--i:18;"></span>
                <span style="--i:21;"></span>
                <span style="--i:15;"></span>
                <span style="--i:13;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:13;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:13;"></span>
                <span style="--i:28;"></span>
                <span style="--i:11;"></span>
                <span style="--i:12;"></span>
                <span style="--i:24;"></span>
                <span style="--i:10;"></span>
                <span style="--i:14;"></span>
                <span style="--i:23;"></span>
                <span style="--i:18;"></span>
                <span style="--i:16;"></span>
                <span style="--i:19;"></span>
                <span style="--i:20;"></span>
                <span style="--i:22;"></span>
                <span style="--i:25;"></span>
                <span style="--i:18;"></span>
                <span style="--i:21;"></span>
                <span style="--i:15;"></span>
                <span style="--i:13;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:13;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:13;"></span>
                <span style="--i:28;"></span>
            </div>
            <div class="box-gallery">
                <img src="../Landing-page/image/1.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" />
                <img src="../Landing-page/image/12.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" />
                <img src="../Landing-page/image/3.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" />
                <img src="../Landing-page/image/14.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700" />
                <img src="../Landing-page/image/15.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900" />
                <img src="../Landing-page/image/16.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1100" />
                <img src="../Landing-page/image/17.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1300" />
                <img src="../Landing-page/image/18.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1500" />
            </div>
    </div>
</section>
<!--gallery-->

<!--contact-->


<!--footer-->
<footer>
    <p>&copy; 2023 by STORY</p>
</footer>
<!--footer-->
<script src="./dist/js/slider.js"> </script>
    <script src="./dist/js/script.js"></script>
    <script type="text/javascript" src="./dist/js/particles.js"></script>
    <script type="text/javascript" src="./dist/js/app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>
