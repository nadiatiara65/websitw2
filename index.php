<?php 
  session_start();
  require_once('koneksi/database.php');
  require_once('koneksi/auth.php');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio website</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navigation bar -->

    <div class="container" id="navbar">
        <div class="nav_section">
            <div class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand text-white">
                    PORTOFOLIO<span>NADIA</span>!
                </a>
                <button class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarsupportedcontent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home" style="color: #f87652 !important;">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="#about">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#portofolio">Portofolio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="bukutamu.php" style="color: #f87652 !important;">BUKU TAMU</a>
                        </li>
                        
                        <?php if(checkLogin()) : ?>
          <li class="nav-item">
            <a class="btn btn-light" href="admin.php">Admin</a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="btn btn-light" href="login.php">Login</a>
          </li>
          <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- hero section -->
    <div class="hero_section" id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                    <h3>Hello</h3>
                    <h1>I<span style="color: #f87652;">'</span>M Nadia Tiara Afifa</h1>
                    <h2>STUDENT OF POLITANI SAMARINDA MAJORING IN INFORMATICS ENGINEERING</h2>
                    <p>AYO IKUTI WEB SAYA!</p>
                    <div class="action__btns">
                        <button class="btn btn-light btn-sm animate_animated">
                            Hire Me
                        </button> 
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                    <center>
                        <img src="images/images/nadia tiara.png" alt="">
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- about section -->
    <div class="about_section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                    <h2 id="heading"> Any Type of question<br>& discuusion</h2>
                    <div>
                        <h4><span style="color: #f87652;">nadiatiara65@gmail.com</span></h4>
                        <div class="contact_info">
                            <h5>Skype: Nadia Tiara</h5>
                            <h5>Whattsap: +6285283884959</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 about_me_right_section">
                        <h2 id="heading">About Me</h2>
                        <hr>
                        
                        <?php
                $queryExp = "SELECT * FROM aboutme ORDER BY id ASC";
                $resultExp = mysqli_query($connectDb, $queryExp);
                
                while ($data = mysqli_fetch_array($resultExp)) : ?>
                <p><?= $data['teks']; ?></p>
                <?php endwhile; ?>
                        <button class="btn btn-light btn-sm animate_animated">
                            Download CV
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- portofolio section -->
        <div class="portofolio_section" id="portofolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-white text-center">My Portofolio <span>.</span>
                        </h1>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="card-colums">
                                    <div class="card border-0,padding-0">
                                        <img src="images/satu.jpg" alt="" class="card-img img-fluid">
                                        <div class="card border-0,padding-0">
                                            <img src="images/dua.jpg" alt="" class="card-img img-fluid">
                                        </div>
                                        <div class="card border-0,padding-0">
                                            <img src="images/tiga.jpg" alt="" class="card-img img-fluid">
                                        </div>
                                        <div class="card border-0,padding-0">
                                            <img src="images/empat.jpg" alt="" class="card-img img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Us Section -->
            <section class id="contact-us"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-title">
                                <h2>Contact Us</h2>

                            </div>
                        </div>
                    </div>
                    <a  href="bukutamu.php" class="btn  btn-sm animate_animated align-center" style="background-color: #f87652 !important;color:#fff;">
                            ISI BUKU TAMU
                </a>
                </div>
            </section>
            <!-- Footer -->
            <section id="footer">
                <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Social Media</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href=""><i
                                            class="fa fa-angle-double-right"></i>Home</a></li>
                                <li><a href=""><i
                                            class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href=""><i
                                            class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href=""><i
                                            class="fa fa-angle-double-right"></i>Get Started</a></li>
                                <li><a href=""><i
                                            class="fa fa-angle-double-right"></i>Videos</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                            <ul class="list-unstyled list-inline social text-center">
                                <li class="list-inline-item"><a href=""><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href=""><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i
                                            class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href=""><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href=""
                                        target="_blank"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                            <p><u><a href="https://www.nationaltransaction.com/">Politeknik Pertanian</a></u> Negeri Samarinda</p>
                            <p class="h6">© H224600499<a class="text-green ml-2"
                                    href="" target="_blank">Nadiatiara</a></p>
                        </div>
                        <hr>
                    </div>
                </div>
            </section>
</body>

</html>