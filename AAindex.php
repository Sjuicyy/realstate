<?php
session_start();
if (!($_SESSION['status'] == 'logedin')) {
    header('Location:index1.php');
}
$login_id = $_SESSION['id']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="0jwGYLXn"></script>
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
<body>
    <!-- / Form Search End /-->
    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="AAindex.php">Fiona<span class="color-b"> Services</span></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">
                <span class="fa fa-user-plus" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AAdd-property.php">Add Property</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AAlocation.php">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AAtestimonial.php">Testimonial</a>
                    </li>
                </ul>
            </div>
            <div class="icon">
                <?php
                require_once 'Connection.php';
                $sql = "SELECT * FROM agent where id=$login_id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                        <a href="./AAprofile.php?id=<?php echo $login_id ?>">
                            <img src="img/Agent/<?php echo $data['image'] ?>" alt="" class="img-sm rounded-circle  float-right" style="width:40px ;height:40px;border-radius:50px">
                        </a>
                        <div class="logout text-center">
                            <img src="img/Agent/<?php echo $data['image'] ?>" alt="" class="img-sm rounded-circle" style="width:100px ;height:100px;border-radius:50px">
                            <p class="mt-4 h4"> <?php echo $data['name'] ?></p>
                            <p><?php echo $data['email'] ?></p>
                            <a href="end.php">
                                <button class="btn btn-b w-100 rounded-4">Log out</button>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->
    <div class="container" style="margin-top:130px;">
        <div class="title-box-d">
            <h3 class="title-d margin-auto">My Properties</h3>
        </div>
        <div class=" form">
            <div class="table-responsive  text-nowrap">
                <!-- information table start  -->
                <div>
                    <a href="./AAdd-property.php">
                        <div class="btn float-right btn-success mb-3">+Add Property</div>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'Connection.php';
                            $sql = "SELECT * FROM property where agent_id=$login_id ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $data['id'] ?>
                                        </td>
                                        <td>
                                            <img src="img/house/<?php echo $data['image'] ?>" alt="" height="80px" width="100px">
                                        </td>
                                        <td>
                                            <?php echo $data['name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['address'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['price'] ?>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" style="accent-color: green;" type="radio" name="<?php echo $data['id'] ?>" id="<?php echo $data['id'] ?>" checked value="1">
                                                <label class="form-check-label" for="<?php echo $data['id'] ?>">
                                                    Available
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" style="accent-color: red;" type="radio" name="<?php echo $data['id'] ?>" id="1<?php echo $data['id'] ?>" value="0">
                                                <label class="form-check-label" for="1<?php echo $data['id'] ?>">
                                                    sold
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-sm btn-success text-center" style="width: 80px;">Edit</div>
                                            <div class="btn-sm btn-success text-center mt-1" style="width: 80px;">Update</div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>
            <!--/ footer Star /-->
            <!-- <section class="section-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="widget-a">
                                <div class="w-header-a">
                                    <h3 class="w-title-a text-brand">Fiona Services</h3>
                                </div>
                                <div class="w-body-a">
                                    <p class="w-text-a color-text-a" align="justify">
                                        तपाई ललितपुर जिल्लामा घर बनाएर बस्नको लागि उपयुक्त जग्गाको खोजिमा हुनुहुन्छ भने
                                        हामिलाइ सम्झनुहोला ।
                                        हामिसंग प्लटिङमा र अन्य क्षेत्रका घर बनाएर बस्न वाताबरणिय हिसाबले अति उपयुक्त
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
                                        <blockquote cite="https://www.facebook.com/floraservices2070" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/floraservices2070">Flora Services</a>
                                        </blockquote>
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
            </footer> -->
            <!--/ Footer End /-->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
            <div id="preloader"></div>
            <!-- JavaScript Libraries -->
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
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