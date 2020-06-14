<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kid's Math</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/circle-cropped.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/circle-cropped.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Kid's Math</a></h1>
      </div>
        
        

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="#carrerresult"><i class="bx bx-file-blank"></i> <span>Carrer Result</span></a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bx-user"></i> <span>Game</span></a>
                <div style="background: #040b14;" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="findsign.php">Find Sign</a>
                  <a class="dropdown-item" href="addition.php">Addition</a>
                  <a class="dropdown-item" href="subtraction.php">Subtraction</a>
                  <a class="dropdown-item" href="multiplication.php">Multiplication</a>
                  <a class="dropdown-item" href="division.php">Division</a>
                </div>
          </li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Tutorial</a></li>
          <li><a href="#developer"><i class="bx bx-server"></i> Developer</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
<!--          <li><a href="#contact"><i class="icofont-live-support"></i>Help</a></li>-->

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Kid's Math</h1>
      <p>Practice <span class="typed" data-typed-items=" Math, Addition, Subtraction, Division, Multiplication"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="section-title">
          <h2>User Profile</h2>
          <p></p>
        </div>

        <?php 
            include('include/conndb.php');
            session_start(); 
            $user_email = $_SESSION['email']; 
            $user_data = mysqli_query($conn,"SELECT * FROM `user_information` WHERE `email` = '$user_email'");
            //$result = mysqli_query($conn,$user_data);
            $user_row = mysqli_fetch_assoc($user_data);
            
            // print_r($user_row);

            $name = $user_row['name']; 
            $uid = $user_row['uid'];
            $phone = $user_row['phone'];
            $age = $user_row['age'];
            $email = $user_row['email'];
            $password = $user_row['password'];
            
            $career_result = mysqli_query($conn,"SELECT * FROM `career_result` WHERE `uid` = '$uid'");
            $user_row1 = mysqli_fetch_assoc($career_result);
            $total_coin = $user_row1['total_coin'];
            $total_match = $user_row1['total_match'];
            $best_score = $user_row1['best_score'];
        ?>

<!--      <div w3-include-html="profile.html"></div>-->
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="image/profile.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 style="font-weight: bolder;font-size: 25px;">
                                        <?php $n = $name; echo $n;?>
                                    </h5>
                                    <h6>
                                        Begainer 
                                    </h6>
                                    <p class="proile-rating" style="color: black;">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">About</a>
                                </li><br>
                                <div class="col-md-8">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                         <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>User Id</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?php echo $uid;?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Name</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?php echo $name;?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Email</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?php echo $user_email;?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Phone</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?php echo $phone;?></p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Age</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?php echo $age;?></p>
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="profile-edit-btn" name="btnAddMore" data-toggle="modal" data-target="#myModal" >Edit Profile</button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Edit Profile</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="editprofile"  method="POST">
                                        <p class="title">Name:</p>
                                        <input type="text" name="name1" placeholder="Enter new Name" value="<?php echo $name; ?>" />
                                        <p class="title">New Password:</p>
                                        <input type="password" name="password1" placeholder="Enter New Password" value="<?php echo $password; ?>" ?>
                                        <p class="title">Phone Number:</p>
                                        <input type="text" name="phone1" placeholder="Enter new Phone Number" value="<?php echo $phone; ?>" />
                                        <p class="title">Age:</p>
                                        <input type="text" name="age1" placeholder="Enter Age" value="<?php echo $age; ?>" />
                                        <input type="password" name="current_password" placeholder="input current password to save changes" />

                                    </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" name="update" class="btn btn-default" >Update</button>
                                    <?php
                                       
                                        if (isset($_POST['update'])) {
                                            $name1=$_POST['name1'];
                                            $phone1=$_POST['phone1'];
                                            $age1=$_POST['age1'];
                                            $pass=$_POST['password1'];
                                            $curr_pass=$_POST['current_password'];
                                            if($curr_pass == $password){
                                                $sql_update = mysqli_query($conn,"UPDATE `user_information` SET `name`='$name1',`phone`='$phone1',`age`='$age1',`password`='$pass' WHERE `email`='$user_email'");
                                                
                                            }
                                                
                                        }
                                    ?>
                                </div>
                              </div>

                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Achivement</p>
                            <!-- <a href="">Addition</a><br/> -->
                                                        <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Addition
                            </button> -->
                            <!-- Modal -->
                            <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Addition</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    ...
                                  </div>
                                  <div class="modal-footer">
                                    <p> Here is all Addition Math Data </p>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <a href="">Addition</a><br/>
                            <a href="">Subtraction</a><br/>
                            <a href="">Multiplication</a><br/>
                            <a href="">Division</a><br/>
                            <a href="">Find Sign</a><br/>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-2">
                    <button type="button" name="signout" style="margin-top: 5px;margin-left: 80px;" class="profile-edit-btn">Sign Out</button>
                </div>
                <?php
                    if(isset($_GET['signout'])) {
                      session_destroy();
                      unset($_SESSION['email']);
                      header('location:login.php');
                  }
                ?>
            </form>           
        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="carrerresult" class="carrerresult">
      <div class="container">

        <div class="section-title">
          <h2>Carrer Result</h2>
          <p></p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-mathematical-alt-1"></i>
              <span data-toggle="counter-up">
              <?php
                  if($total_match == null){
                    echo "0"; 
                  }else{
                    echo "".$total_match;
                  }
                ?>
              </span>
              <p><strong>Total Game</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-coins"></i>
              <span data-toggle="counter-up">
                <?php
                  if($total_coin == null){
                    echo "0"; 
                  }else{
                    echo "".$total_coin;
                  }
                ?></span>
              <p><strong>Total Coin</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-score-board"></i>
              <span data-toggle="counter-up">
              <?php
                  if($best_score == null){
                    echo "0"; 
                  }else{
                    echo "".$best_score;
                  }
                ?>
              </span>
              <p><strong>Best Score</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio testimonials section-bg">
      <div class="container">
          
        <div class="section-title testimonial-item" data-aos="fade-up">
          <h2>Tutorial</h2>
          <p>Math is a complicated subject. Some Kid's are great at it and some kid's are don’t do well. However, there are many mobile games,web games and interesting vedio for learning maths. for the discerning mathematician or even if you want to make yourself better. Most games we stumbled across were for kids. After all, educational games are all the rage right now. Still, we found a good supply of math games for adults as well so we have a smattering of both kids math games and Web math game. </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-vedio">Vedio</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-vedio">
            <div class="portfolio-wrap">
              <img src="assets/img/multiplication.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://www.youtube.com/watch?v=BZ41Fh2MEVw" title="Watch Vedio"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img class="immmg" src="assets/img/androidGame/mathblaster.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/androidGame/math-blaster-mobile-04.jpg" data-gall="portfolioGallery" class="venobox" title="Math Blaster screenshot"><i class="bx bx-plus"></i></a>
                <a href="http://www.mathblaster.com/mobile/math-blaster" title="Downloads"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/mathgamestime.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img class="immmg" src="assets/img/androidGame/HyperBlast2.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/androidGame/mb-hyperblast2-image-04.jpg" data-gall="portfolioGallery" class="venobox" title="Hyper Blast 2 screenshot"><i class="bx bx-plus"></i></a>
                <a href="http://www.mathblaster.com/mobile/math-blaster-hyper-blast-2" title="Downloads"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-vedio">
            <div class="portfolio-wrap">
              <img src="assets/img/addthumb.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://www.youtube.com/watch?v=8cR_1Qi-tP4" title="Watch Vedio"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-vedio">
            <div class="portfolio-wrap">
              <img src="assets/img/thumb2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://www.youtube.com/watch?v=k9ZT2YWkLBI" title="Watch Vedio"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/funbrain.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/web/funbrain.PNG" data-gall="portfolioGallery" class="venobox" title="Funbrain Web Screenshot"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img  src="assets/img/androidGame/b-force%20blaster.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/androidGame/bforceblaster/mb-bforceblaster-image-01.jpg " data-gall="portfolioGallery" class="venobox" title="B-force Blaster screenshot"><i class="bx bx-plus"></i></a>
                <a href="http://www.mathblaster.com/mobile/math-blaster-b-force-blaster" title="Downloads"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/Mathblaster.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/web/mathblaster.PNG" data-gall="portfolioGallery" class="venobox" title="Math Blaster Web screenshot"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
      
      
    <!-- ======= Testimonials Section ======= -->
    <section id="developer" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Developers</h2>
          <p></p>
        </div>


          <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Hello, I am Android App Developer and Web Developer . I provide services in Mobile Application  and Web Application Development. I have some experience in Java,C,C++ language. Experienced In: - Android (Application Development). I Always enhance user satisfaction with a product by improving the usability, accessibility, and pleasure provided in the interaction with the product.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/user.png" class="testimonial-img" alt="">
            <h3>Anik Rakib</h3>
            <h4>Web &amp; Andrid Developer</h4>
          </div>


      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Feedback</h2>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>kid's math</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="https://github.com/anik-rakib">Anik Rakib</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>    

</body>
    
</html>