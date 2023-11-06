<?php
  if(isset($_GET["pesan"])){
  //seleksi
  if($_GET['pesan']=="gagal"){
    echo "<div class='alert'>Usename dan Password tidak sesuai !</div>";
    //loncat
    header("Location:tambah.php");
    exit;
  }else{
    $error=true;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UPT KOMPUTER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: tugas1
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Sip<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Schedule</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="#team">Login</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="500">

        <div class="col-xl-6 col-lg-8">
          <h1>Welcome My Website<span></span></h1>
          <h2>Sistem Informasi Penjadwalan Lab </h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">

            
        

           
        
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/portfolio/kegiatan-2.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Sejarah UPT Komputer</h3>
            <p class="fst-italic">
              
              UPT Komputer merupakan pengembangan suatu unit kepengurusan yang mewadahi fasilitas maintenance hardware institusi, monitor laboratorium komputer dan pelatihan pemograman komputer yang pada awalnya di bawah kepengurusan Prabakti Endramawan, S.Pd. pada periode 2012 – 2017 dan saat ini terdapat penyesuaian dengan kepengurusan yang terbaru yang di bawah kepengurusan Andria, M.Kom. (selaku Kepala Unit), Noordin Asnawi., M. Kom (Wakil Kepala Unit), Reza Kusuma S., M.Pd. (Sekretaris Unit) pada periode 2017 – 2021 dan memiliki dua staff yaitu Fajar Salistyo, S. Kom dan Suyadi, S. Kom.
            
            </p>

        
        

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
   
    </section><!-- End Clients Section -->
        

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
                  
        <h3>Layanan UPT Komputer</h3>
        
        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features-2.jpeg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Maintenance and repair operations (MRO) </h4>
              
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Laboratorium komputer</h4>

            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Kerjasama bidang PKL dengan biro kerjasama dan humas</h4>
             
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Pelatihan IT dan UKK bertaraf internasional</h4>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    

        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Schedule</h2>
          <p>Schedule</p>
        </div>

        <?php 
 require "function.php";

$database = query('SELECT * FROM lab');
if(isset($_POST["keyword"])){
  $database=cari($_POST["keyword"]);
}else{

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPT KOMPUTER</title>
  <style>
  .data{
    position: relative;
    left: 48%;
  }
  .container table{
    margin: auto;
    width: 100%;
    min-height: 200px;
  }
  .mahok a{
    color:black;
  }.thead{
    background-color: black;
    color:white;
    width: 100%;
    min-height: 200%;
  }
  table th,
  table td{
    border: 1px solid #000000;
    padding: 7px 17px;
  }
</style>
<br>
</head>
<body>
  <form action="" method="post">
</form>
	<!-- header -->
	<div class="medsos">
		<div class="container">

		</div>
	</div>

  <br>
	
  <div class="container">
        <table border  ="1" cellpadding="10" cellspacing="0">
          <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>PEMESAN</th>
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>TANGGAL PINJAM</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($database as $dts) :?>
                    <tr>
                        <td><?php echo $i ?></td>
                <td><?php echo $dts["PEMESAN"] ?></td>
                <td><?php echo $dts["PRODI"] ?></td>
                <td><?php echo $dts["RUANG LAB"] ?></td>
                <td><?php echo $dts["TANGGAL PINJAM"] ?></td>
                <td><?php echo $dts["JAM MULAI"] ?></td>
                <td><?php echo $dts["JAM SELESAI"] ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach;?>

              

            </tbody>
        </table>
    </div>
</body>
</html>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan</h2>
          <p>Check our Kegiatan</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">1</li>
              <li data-filter=".filter-card">2</li>
              <li data-filter=".filter-web">3</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-1.jpeg" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
               
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-5.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-6.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
              </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-7.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-8.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-8.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
               
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kegiatan-9.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kegiatan-10.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->





    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

      
        


    
        
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->

      <!-- ======= Team Section ======= -->
      <style>
        body{
	font-family: sans-serif;
	background: #ebf9fb;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #2aa7e2;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
</style>




      <div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>

		</form>
		
	</div>
 
 
</body>
</html>

    
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.45533997341!2d111.53941567595258!3d-7.634081575503152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be94b7511f73%3A0x863e1316e7a8da28!2sUniversitas%20PGRI%20Madiun!5e0!3m2!1sid!2sid!4v1694401981957!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Setia Budi No. 85 Madiun, Jawa Timur, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p> uptkomputer@unipma.ac.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0351-462986</p>
              </div>

            </div>

          </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>uptkomputer<span>.</span></h3>
              <p>
                UPT KOMPUTER <br>
                Jl. Setia Budi No. 85 Madiun, Jawa Timur, Indonesia<br><br>
                <strong>Phone:</strong>0351-462986<br>
                <strong>Email:</strong> uptkomputer@unipma.ac.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>



        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>UPT KOMPUTER</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Yovita amelia</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>