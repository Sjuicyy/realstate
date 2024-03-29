<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fiona Services</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    .logout {
      display: none;
      color: rgb(255, 255, 255);
      position: absolute;
      margin-left: -200px;
      margin-top: 40px;
      background-color: #2eca6ad5;
      padding: 5px;
      border: 2px solid #2ECA69;
      border-radius: 6px;
      width: 300px;
    }
    .icon:hover .logout {
      display: block;
    }
  </style>
  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="0jwGYLXn"></script>
<body>
  <?
  require_once 'Connection.php';
  ?>
  <div class="click-closed"></div>
  <!--/ Log in Form  Start /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Welcome to Agent Space</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <div class="row">
        <div class="col">
          <button type="submit" class="btn btn-b w-100 btn1">Login</button>
          </a>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-a w-100 btn2">SignUp</button>
          </a>
        </div>
      </div>
      <hr>
      <!-- login modal start -->
      <div id="modal1">
        <form class="form-a" action="loginauth.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12 mb-2 mt-3">
              Log in here : <br> <br>
              <div class="form-group">
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Email/Phone Number" name="email">
              </div>
            </div>
            <div class="col-md-12 mb-2 mt-4">
              <div class="form-group">
                <input type="password" class="form-control form-control-lg form-control-a" placeholder="Password" name="password">
              </div>
            </div>
            <div class="col-md-12 mt-4">
              <button type="submit" name="submit" class="btn btn-b" style="width: 100%;">Log In</button>
            </div>
          </div>
        </form>
      </div>
      <!-- login modal end -->
      <!-- signup modal start -->
      <div id="modal2">
        <form class="form-a" action="addagent.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12 mb-2">
              SignUp here: <br><br>
              <div class="form-group">
                <label for="Type">Full Name</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Your Full Name Here" name="name">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="city">Phone Number</label>
                <input type="number" class="form-control form-control-lg form-control-a" name="phone">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="bedrooms">Email</label>
                <input type="email" class="form-control form-control-lg form-control-a" placeholder="Email Address" name="email">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="Type">Address</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Your Recent Address Here" name="address">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for=" ">Password</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Please use Strong Password" name="password">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="bathrooms">About You</label>
                <textarea class="form-control form-control-lg form-control-a" id="bathrooms" name="about">
              </textarea>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="price">Profile Image Upload Here</label>
                <input type="file" class="form-control form-control-lg form-control-a" onchange="readURL(this.files);" name="photo">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group text-center">
                <label for="price" style="float: left">Profile Image Display Here</label>
                <img src="img/user.png" id="blah" class="form-control" style="max-width:180px;width: 100%;height: auto;" />
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" name="submit" class="btn btn-b" style="width: 100%;">Sign Up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- signup modal end -->
  <!-- / Form Search End /-->
  <!--/ Nav Start /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <a class="navbar-brand text-brand" href="index.php">Fiona<span class="color-b"> Services</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">
        <span class="fa fa-user-plus" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.php">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agents-grid.php">Agents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">
        <span class="fa fa-user-plus" aria-hidden="true"></span>
      </button>
      <!-- admin profile icon  -->
      <!-- <div class="icon">
        < ?php
        require_once 'Connection.php';
        $sql = "SELECT * FROM agent where id='3'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($data = mysqli_fetch_array($result)) {
        ?>
            <a href="./agent-single.php?id=3">
              <img src="img/Agent/< ?php echo $data['image'] ?>" alt="" class="img-sm rounded-circle  float-right" style="width:40px ;height:40px;border-radius:50px">
            </a>
            <div class="logout text-center">
              <img src="img/Agent/< ?php echo $data['image'] ?>" alt="" class="img-sm rounded-circle" style="width:100px ;height:100px;border-radius:50px">
              <p class="mt-4 h4"> < ?php echo $data['name'] ?></p>
              <p>< ?php echo $data['email'] ?></p>
              <button class="btn btn-b w-100 rounded-4">Log out</button>
            </div>
        < ?php
          }
        }
        ?>
      </div> -->
      <!-- admin profile icon  end -->
    </div>
  </nav>
  <!--/ Nav End /-->
  <!--/ Carousel Start /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/widePic/wide1.jpg)">
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Sell </span> Your
                      <br> Properties
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/widePic/wide3.jpg)">
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Buy </span> Your
                      <br> Properties
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->
  <!--/ Services Start /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">हामी नै किन ?</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c mx-2">बिज्ञापन</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                फ्री बिज्ञान गरि आफ्नो घर,जग्गा तथा व्यवसाय किन्नु ,बेच्नु वा भाडामा लिन दिन परेमा ।
              </p>
            </div>
            <div class="card-footer-c">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c mx-2">घर जग्गा बिक्री </h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                जग्गा घर नबिकेर अलमलमा पर्नुभएको छ ?
              </p>
            </div>
            <div class="card-footer-c">
              <!-- <a href="#" class="link-c link-icon">Read more
                             <span class="ion-ios-arrow-forward"></span>
                           </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c mx-2">सूचना </h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                आफ्नो जग्गा कुन हो, कित्ता नम्बर कति हो, गुठीको हो की, मोहियानी छ की, धितो बन्धक छ की, अदालतमा मुद्धा
                परेको छ की? आदि ईत्यादी सबै कुरा मालपोत कार्यालयमा थाहा हुन्छ । त्यती मात्र नभएर त्यो जग्गाको मूल्य कति
                हो, वर पर कति रुपैयाँमा
                कारोबार भएको छ, चलन चल्ती र सरकारी मुल्याङ्कन कति छ? थाहा पाई राख्नु होस ता कि भबिस्यमा कुनै समस्या न
                आओस ।
              </p>
            </div>
            <div class="card-footer-c">
              <!--              <a href="#" class="link-c link-icon">Read more-->
              <!--                <span class="ion-ios-arrow-forward"></span>-->
              <!--              </a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->
  <!--/ Property Start /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.php">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="row property-grid grid">
          <?php
          require_once 'Connection.php';
          $sql = "SELECT * FROM property";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_array($result)) {
          ?>
              <div class="col-md-4">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img src="img/house/<?php echo $data['image']; ?>" alt="" width="100%" height="380px">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.php?id=<?php echo $data['id']; ?>"><?php echo $data['address']; ?>
                            <br /> <?php echo $data['name']; ?>
                          </a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">sale | Rs. <?php echo $data['price']; ?></span>
                        </div>
                        <a href="property-single.php?id=<?php echo $data['id']; ?>" class="link-a">Click here to view
                          <span class="ion-ios-arrow-forward"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span><?php echo $data['area']; ?> m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span><?php echo $data['beds']; ?></span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span><?php echo $data['baths']; ?></span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span><?php echo $data['garage']; ?></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property End /-->
  <!-- Best Agents Start  -->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Best Agents</h2>
            </div>
            <div class="title-link">
              <a href="agents-grid.php">All Agents
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        require_once 'Connection.php';
        $sql = "SELECT * FROM agent";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($data = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-4">
              <br>
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="img/Agent/<?php echo $data['image']; ?>" alt="" width="100%" height="345px">
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.php?id=<?php echo $data['id'] ?>" class="link-two">
                          <?php echo $data['name']; ?>
                        </a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a" align="justify">
                      <?php echo $data['address']; ?>
                      <br>
                      Since :
                      <?php echo $data['date']; ?>
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong>
                        <?php echo $data['phone']; ?>
                      </p>
                      <p>
                        <strong>Email: </strong>
                        <?php echo $data['email']; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
  <!-- Best Agents End  -->
  <!--/ footer Start /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Fiona Services</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a" align="justify">
                तपाई ललितपुर जिल्लामा घर बनाएर बस्नको लागि उपयुक्त जग्गाको खोजिमा हुनुहुन्छ भने हामिलाइ सम्झनुहोला ।
                हामिसंग प्लटिङमा र अन्य क्षेत्रका घर बनाएर बस्न वाताबरणिय हिसाबले अति उपयुक्त टुक्रा जग्गा बिक्रिमा छ ।
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> fionaservices@gmail.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +977 015522725
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Admin Login</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Login</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Signup</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">View Properties</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent List</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">About Fiona Services</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Facebook</h3>
            </div>
            <div class="w-body-a">
              <div class="fb-page" data-href="https://www.facebook.com/floraservices2070" data-tabs="timeline" data-width="" data-height="110" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/floraservices2070" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/floraservices2070">Flora Services</a></blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Fiona Services</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            Designed by <a href="https://pritambajagain.com.np/">D Czar</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- JavaScript Libraries -->
  <script>
    function readURL(files) {
      if (files && files[0]) {
        var reader = new FileReader();
        reader.onload = function(event) {
          $('#blah')
            .attr('src', event.target.result);
        };
        console.log(files[0])
        reader.readAsDataURL(files[0]);
      }
    }
  </script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
    document.querySelector('#modal2').style.display = 'none';
    document.querySelector('.btn2').style.backgroundColor = 'white';
    document.querySelector('.btn2').style.color = 'black';
    document.querySelector('.btn1').style.color = 'white';
    document.querySelector('.btn1').addEventListener('click', showBtn1);
    function showBtn1(a) {
      document.querySelector('.btn2').style.backgroundColor = 'white';
      document.querySelector('.btn2').style.color = 'black';
      document.querySelector('.btn1').style.backgroundColor = '#28A746';
      document.querySelector('.btn1').style.color = 'white';
      document.querySelector('#modal1').style.display = 'block';
      document.querySelector('#modal2').style.display = 'none';
      a.preventDefault();
    }
  </script>
  <script>
    document.querySelector('.btn2').addEventListener('click', showBtn2);
    function showBtn2(b) {
      document.querySelector('.btn1').style.backgroundColor = 'white';
      document.querySelector('.btn1').style.color = 'black';
      document.querySelector('.btn2').style.backgroundColor = '#28A746';
      document.querySelector('.btn2').style.color = 'white';
      document.querySelector('#modal1').style.display = 'none';
      document.querySelector('#modal2').style.display = 'block';
      b.preventDefault();
    }
  </script>
</body>
</html>