<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Main Page (default)-->
    <title>Wired</title>
    <link rel="icon" href="images/logo.png">

    <!-- resets browser defaults -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="css/promo.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--footer icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">

    <!--typography: Raleway from Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navigation-->

  <nav class="navbar-area">

    <div class="site-navbar">
      <!-- site logo -->
      <a href="index.html" class="site-logo"><img src="images/logo.png" alt="logo"></a>

      <!-- site menu/nav -->
      <ul>
        <li class="nav-list"><a href="promotion.php">PROMOTIONS</a></li>
        <li class="nav-list"><a href="reservation.php">CONCESSIONS</a></li>
        <li class="nav-list"><a href="parking.html">PARKING</a></li>
        <li class="nav-list"><a href="social_feed.php">SOCIALIZE</a></li>
        <li class="nav-list"><a href="about.html">ABOUT US</a></li>
        <li class="nav-list"><a href="faq.php">NEED HELP?</a></li>

        <li class="search-bar">
          <a href="search_page.html"><img src="images/search-icon.png" style="width: 25px;"></a>
        </li>
        <li class="login-btn">
          <a href="login.html" class="login-button"><p>Log In</p></a>
        </li>

      </ul>

      <!-- nav-toggler for mobile version only -->
      <button class="nav-toggler">
        <span></span>
      </button>
    </div>

  </nav>


	<!-- top banner / main page -->
  <section id="banner">
		<div class="banner-container">
        <div class="banner-content">
          <h1>Apply for the PROMOTION</h1>
          <h4>we are always with your luck</h4>
        </div>
    </div>
  </section>


  <section id="section1">
    <div class="container">

      <div class="row align-items-center">

        <div class="col-md-12">
            <div class="promo2">
                <div class="row">

                    <h3> DISCOUNTED  <br> <span class="food-ticket">FOOD?</span></h3>
                </div>

                <div class="row">
                    <p> Apply Below to recieve a special discount code for Wired Users.</p>
                </div>

                <form id="prmForm" method="post" target="_self">
                    <label for="prm_name"><h5><b>Name</h5></b></label>
                    <br>
                    <input type="text" required name="name"/>
                    <br>
                    <label for="prm_email"><h5><b>Email</h5></b></label>
                    <br>
                    <input type="email" required name="email" value="john@doe.com"/>
                    <br>
                    <input type="submit" value="Apply Now" class="form-btn"/></input>
                </form>
                <div class= "row">
                      <?php
                        //uncomment to show errors
                        //ini_set('display_errors', '1');
                        //ini_set('display_startup_errors', '1');
                        //error_reporting(E_ALL);
                          // (A) PROCESS RESERVATION
                          if (isset($_POST['name'])) {
                            require "promotion_submit.php";
                            if ($_RSV->save(
                              $_POST['name'],
                              $_POST['email'])) {
                              echo "<div class='ok'><p>Reservation saved.</p></div>";
                            } else { echo "<div class='err'>".$_RSV->error."</div>"; }
                          }
                      ?>
                </div>
            </div>


        </div>
  </div>

  </section>



    <footer class ="footer-container" >
      <div class="container" >
        <div class="row">

          <div class="col-md-6">

            <h5>Wired &copy; 2020</h5>

            <p>cgkang@iu.edu	&ensp; 812)351-0448 	&ensp; Bloomington, IN</p>

          </div>

          <div class="col-md-6">

            <a href=""><i class="fa fa-facebook-square"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-github"></i></a>

          </div>
        </div>
      </div>
    </footer>

    <!--navigation bar JavaScript-->
    <script src="js/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
