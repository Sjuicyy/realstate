<?php
session_start();
if (!($_SESSION['status'] == 'logedin')) {
  header('Location:index.php');
}
$login_id = $_SESSION['id']
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Add Testimony</title>
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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="0jwGYLXn">
</script>
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
            <a class="nav-link " href="AAindex.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AAdd-property.php">Add Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AAlocation.php">Location</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="AAtestimonial.php">Testimonial</a>
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
              <a href="index.php">
                <button class="btn btn-b w-100 rounded-4">Log out</button>
              </a>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <!-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" title="Agent Space">
        <span class="fa fa-user-plus" aria-hidden="true"></span>
      </button> -->
    </div>
  </nav>
  <!--/ Nav End /-->
  <!--/ Footer End /-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- JavaScript Libraries -->
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