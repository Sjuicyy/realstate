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

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0"
  nonce="0jwGYLXn"></script>


<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->

  </div>
  <!-- / Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <a class="navbar-brand text-brand" href="index.php">Fiona<span class="color-b"> Services</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">

      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Property
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property-single.php">Property Single</a>
              <a class="dropdown-item" href="property-grid.php">Property List</a>
            </div>
          </li>

          <!-- <li class="nav-item">
                     <a class="nav-link" href="blog-grid.html">Blog</a>
                   </li> -->
          <li class="nav-item">
            <a class="nav-link" href="Login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->











  <div class="">
    <div class="title-box-d">
      <h3 class="title-d">Welcome to Agent Space</h3>
    </div>
    <span class=""></span>
    <div class=" form">
      <div class="row">
        <div class="col">
          <a href="#modal1">
            <button type="submit" class="btn btn-b">Login</button>
          </a>
        </div>
        <div class="col">
          <a href="#modal2">
            <button type="submit" class="btn btn-b ">SignUp</button>
          </a>
        </div>
      </div>
      <hr>
      <div id="modal2">
        <form class="form-a" action="agentsave.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12 mb-2">
              SignUp here: <br><br>
              <div class="form-group">
                <label for="Type">Full Name</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Your Full Name Here"
                  name="Name">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="Type">Address</label>
                <input type="text" class="form-control form-control-lg form-control-a"
                  placeholder="Your Recent Address Here" name="Address">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="city">Phone Number</label>
                <input type="number" class="form-control form-control-lg form-control-a" name="Phone">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="bedrooms">Email</label>
                <input type="email" class="form-control form-control-lg form-control-a" placeholder="Email Address"
                  name="Email">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="garages">Password</label>
                <input type="password" class="form-control form-control-lg form-control-a"
                  placeholder="Please use Strong Password" name="Password">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="bathrooms">About You</label>
                <textarea class="form-control form-control-lg form-control-a" id="bathrooms" name="Detail">
              </textarea>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="price">Profile Image Upload Here</label>
                <input type="file" class="form-control form-control-lg form-control-a" onchange="readURL(this);"
                  name="Photo">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group text-center">
                <label for="price" style="float: left">Profile Image Display Here</label>
                <img src="img/user.png" id="blah" class="form-control"
                  style="max-width:180px;width: 100%;height: auto;" />
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" name="submit" class="btn btn-b" style="width: 100%;">Sign Up</button>
            </div>
          </div>
        </form>
      </div>

    </div>


















    <!--/ footer Star /-->
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
                  हामिसंग प्लटिङमा र अन्य क्षेत्रका घर बनाएर बस्न वाताबरणिय हिसाबले अति उपयुक्त टुक्रा जग्गा बिक्रिमा छ
                  ।
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
                <div class="fb-page" data-href="https://www.facebook.com/floraservices2070" data-tabs="timeline"
                  data-width="" data-height="110" data-small-header="false" data-adapt-container-width="true"
                  data-hide-cover="false" data-show-facepile="false">
                  <blockquote cite="https://www.facebook.com/floraservices2070" class="fb-xfbml-parse-ignore"><a
                      href="https://www.facebook.com/floraservices2070">Flora Services</a></blockquote>
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
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#blah')
              .attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
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

</body>

</html>