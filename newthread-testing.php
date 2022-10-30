<html>
	<head>
		<title>Social Feed</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!--Main Page (default)-->
		<title>Wired</title>
		<link rel="icon" href="images/logo.png">

		<!-- resets browser defaults -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<!-- custom styles -->
		<link rel="stylesheet" type="text/css" href="css/posting.css">

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
    <div class="body-for-newthread">
	<!--banner-->

    <div class="banner">
		<div class="banner-content">
			<div class="banner-title">
			<p>What's <span>YOUR THOUGHT?</span></p>
			</div>
		</div>
	</div>


	<div class="background">
  	<div class="container" id="container">

	<div class="row" id="posting-container">

        <div class="col-md-12" id="posted">
            <?php
            //uncomment to show errors
            //ini_set('display_errors', '1');
            //ini_set('display_startup_errors', '1');
            //error_reporting(E_ALL);

            $conn = mysqli_connect("db.luddy.indiana.edu", "i494f20_team70", "my+sql=i494f20_team70","i494f20_team70");
            if (!$conn) {
              die("Failed to connect to MySQL: " . mysqli_connect_error());
            }
            $time = time();
            mysqli_query($conn,"INSERT INTO threads VALUES(NULL,'$_POST[title]','$_POST[message]','$_POST[author]','0','$time')");

            echo "<div class='threads-posted'><p>Thread Successfully Posted!</p><br><a href='social_feed.php'>Return</a></div>";
            ?>
        </div>


	</div>
	</div>
	</div>

    </div>

		<footer class ="footer-container" >
			<div class="container">
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
	</div>
	</body>
	<script src="js/non-banner-nav.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>
