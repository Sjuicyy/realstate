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
    <!-- / Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="index.php">Fiona<span class="color-b"> Services</span></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">
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
            <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">
                <span class="fa fa-user-plus" aria-hidden="true"></span>
            </button>
        </div>
    </nav>
    <!--/ Nav End /-->
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
            <?php
            require_once 'Connection.php';
            $sql = "SELECT * FROM agent WHERE id='1' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($data = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?php echo $data['name']; ?></h1>
                        <span class="color-text-a">Agent </span>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Intro Single -->



    <!-- ======= Agent Single ======= -->
    <section class="agent-single" id="view">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <img src="img/Agent/<?php echo $data['image']; ?>" alt="" class="agent-avatar img-fluid">
                            </div>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d"><?php echo $data['name']; ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="agent-content mb-3">
                                    <p class="content-d color-text-a">
                                    <?php echo $data['about']; ?>
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Mobile: </strong>
                                            <span class="color-text-a"> +977-<?php echo $data['phone']; ?></span>
                                        </p>
                                        <p>
                                            <strong>Email: </strong>
                                            <span class="color-text-a"> <?php echo $data['email']; ?></span>
                                        </p>
                                        <p>
                                            <strong>Facebook: </strong>
                                            
                                            <a>
                                                <a href="<?php echo $data['facebook']; ?>" class="color-text-a"> facebook@ <?php echo $data['name']; ?></a>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <div class="socials-a">
                                        <ul class="list-inline">
                                           
                                            <li class="list-inline-item mx-5">
                                                <a href="<?php echo $data['facebook']; ?>">
                                                    <i class=" fa fa-facebook" aria-hidden="true"></i>acebook
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="#">
                                        <div class="btn btn-sm btn-success w-50" id="btn1">Edit</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!---  ===== End Agent Single ======== -->




    <!-- =======Editable Agent Section start ======== -->
    <section class="agent-single" id="edit">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <img src="img/Agent/<?php echo $data['image']; ?>" alt="" class="agent-avatar img-fluid">
                            </div>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <div class="title-box-d">
                                            <h3 class="title-d"><?php echo $data['name']; ?>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="agent-content mb-3">

                                        <div class="info-agents color-a">
                                            <p>
                                                <strong>Mobile: </strong>
                                                <input class="form form-control" type="text" readonly>
                                            </p>
                                            <p>
                                                <strong>Email: </strong>
                                                <input class=" form form-control" type="text" readonly>
                                            </p>
                                            <p>
                                                <strong>Facebook: </strong>
                                                <input class=" form form-control" type="text">
                                            </p>
                                            <p>
                                                <strong>About: </strong>
                                                <input class="form form-control" type="text">
                                            </p>
                                            <p>
                                                <strong>Password: </strong>
                                                <input class=" form form-control" type="text"
                                                    placeholder="Enter new password">
                                                <input class=" form form-control mt-1" type="text"
                                                    placeholder="Re-enter password">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="profile.php">
                                                <div class="btn btn-sm w-75 btn-success">Save</div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="profile.php">
                                                <div class="btn btn-sm w-75 btn-danger">Cancel</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <?php
                }
            }
            ?>
    </section>
    <!-- =======Editable Agent Section end ======== -->

    <!--/ footer 1 Star /-->
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
                                तपाई ललितपुर जिल्लामा घर बनाएर बस्नको लागि उपयुक्त जग्गाको खोजिमा
                                हुनुहुन्छ भने
                                हामिलाइ सम्झनुहोला ।
                                हामिसंग प्लटिङमा र अन्य क्षेत्रका घर बनाएर बस्न वाताबरणिय हिसाबले अति
                                उपयुक्त
                                टुक्रा जग्गा बिक्रिमा छ
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
                                        <i class="fa fa-angle-right"></i> <a href="#">View
                                            Properties</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Agent List</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">About Fiona
                                            Services</a>
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
                            <div class="fb-page" data-href="https://www.facebook.com/floraservices2070"
                                data-tabs="timeline" data-width="" data-height="110" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                                <blockquote cite="https://www.facebook.com/floraservices2070"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/floraservices2070">Flora
                                        Services</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Footer 2 End /-->


    <!-- footer 2 start -->

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
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
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
    <!--/ Footer 2 End /-->

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

    <script>
        document.querySelector('#view').style.display = 'block';
        document.querySelector('#edit').style.display = 'none';

        document.querySelector('#btn1').addEventListener('click', showBtn1);

        function showBtn1(a) {
            document.querySelector('#view').style.display = 'none';
            document.querySelector('#edit').style.display = 'block';


            a.preventDefault();
        }
    </script>

</body>

</html>