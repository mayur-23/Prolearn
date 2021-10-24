<?php
  include('connect.php');
  session_start();
  if (isset($_SESSION['email'])) {
  }else{
     echo '<script type="text/javascript">
               location.replace("login.php");
                </script>';
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prolearn - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- library CSS Files -->
  <link href="../assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/library/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/library/aos/aos.css" rel="stylesheet">
  <link href="../assets/library/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/library/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/library/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span>Prolearn</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="">My Learnings</a></li>
          <li><a class="nav-link scrollto" href="../explore.html">Explore</a></li>
          <li><a class="nav-link scrollto" href="#team">My Progress</a></li>
          <li><a class="nav-link scrollto" href="../quiz.html">Quiz</a></li>

        <li class="dropdown active"><a href="#"><span><?php
            $mail =$_SESSION['email'];
            $result =mysqli_query($conn,"SELECT * from userdetails where email='$mail'");
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo $row['name'];
            ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="./logout.php">Logout</a></li>
            </ul>
          </li>
          <!-- <li><a class="getstarted scrollto" href="./dynamic/login.php">Login/Signup</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->


  <main id="main">


    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">

      <!-- <div class="container">


          <div class="row"  data-aos="fade-right">

            <div class="col-2-lg">

            </div>

            <div class="col-8-lg">
              <div class="blog-author d-flex align-items-center" style="display: block; margin: 0 auto">
                <img src="assets/img/quiz/cplus.png" alt="">
                <div>
                  <h4>C++ Quiz</h4>
                  <p>
                    C++ programming language quiz it contain basics of C++ programming language<br>
                  <pre><h6>Questions : 10        Max Score : 20</h6></pre>
                  </p>
                </div>
              </div>
            </div>


            <div class="col-2-lg">

            </div>

          </div>

      </div><!-- End blog comments -->







  <div class="container">


    <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 blog-author"  >
    <form style="display: block; margin: 0 auto; text-align: center;">

      <img src="../assets/img/profile.png" class="myprofile" id="mypro" alt="">

      <?php
        include('connect.php');

      if (isset($_GET['id']))
      {   

          $id = (int) $_GET['id'];
          $sql = 'SELECT * FROM userdetails WHERE id = ' . $id;
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            

          // Then the rest of the code to check the results goes here
      }
?>
      <div class="form-group" style=" margin: 10px; " >
        <h4>Name</h4>
        <input style="text-align: center;"type="text" class="form-control" value="<?php echo $row['name'];?>" disabled>
      </div>
      <br>
      <div class="form-group">
        <h4>Email ID</h4>
        <input style="text-align: center;" type="text" class="form-control" value="<?php echo $row['email'];?>" disabled>
      </div>
      <br>
      <div class="form-group">
        <h4>Mobile Number</h4>
        <input style="text-align: center;" type="text" class="form-control" value="<?php echo $row['mobile'];?>" disabled>
      </div>
      <br>
      <div class="form-group">
        <h4>Age</h4>
        <input style="text-align: center;"   type="text" class="form-control" value="<?php echo $row['age'];?>" disabled>
      </div>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>


  </div><!-- End blog comments -->


    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>ProLearn</span>
            </a>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Our course</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">DSA</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Core Computer Science</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Computer Programming</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              ProLeaern Academy <br>
              Pune,  411026<br>
              Maharashtra <br><br>
              <strong>Phone:</strong> +1 775588 78 11<br>
              <strong>Email:</strong> prolearn@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- library JS Files -->
  <script src="assets/library/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/library/aos/aos.js"></script>
  <script src="assets/library/php-email-form/validate.js"></script>
  <script src="assets/library/swiper/swiper-bundle.min.js"></script>
  <script src="assets/library/purecounter/purecounter.js"></script>
  <script src="assets/library/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/library/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



