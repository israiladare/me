<!--<html>
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Contact Form</title>
<link rel="stylesheet" href=".assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
	<div class="container">
		<div class="row py-4">
			<div class="col">
				<h2>Contact Form</h2>
			</div>
		</div>-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <meta content="This is the Resume of Dare-Israila Olatunji" name="description">
  <meta content="Resume, Portfolio, Freelancer, Researcher, CV, Python" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/dare-israila-olatunji.png" rel="dare-israila-olatunji">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.6.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Dare Israila Olatunji</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/amb_olatunji" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/amb.olatunji" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/amb_olatunji" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/ambolatunji/" class="github"><i class="bx bxl-github"></i></a>
          <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>--->
          <a href="https://www.linkedin.com/in/amb-olatunji/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://www.kaggle.com/ambolatunji/" class="kaggle"><i class="bx bxl-kaggle"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#dare" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  		<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
		<form name="frmContact" id="frmContact" method="post" action=""
			enctype="multipart/form-data" novalidate>
			<div class="row">
				<div class="form-group col-md-4">
					<label>Name</label> <span id="userName-info"
						class="invalid-feedback"></span>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><?php require __DIR__ . 'assets/vendor/bootstrap/bootstrap-icons/person.svg';?></span>
						</div>
						<input type="text" class="form-control" name="userName"
							id="userName" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>Email</label> <span id="userEmail-info"
						class="invalid-feedback"></span>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><?php require __DIR__ . 'assets/vendor/bootstrap/bootstrap-icons/envelope.svg';?></span>
						</div>
						<input type="email" name="userEmail" id="userEmail"
							class="form-control" required>
					</div>
					<small id="emailHelp" class="form-text text-muted">Your email will
						not be shared.</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					<label>Subject</label> <span id="subject-info"
						class="invalid-feedback"></span>
					<div class="input-group">

						<div class="input-group-prepend">
							<span class="input-group-text"><?php require __DIR__ . 'assets/vendor/bootstrap/bootstrap-icons/question.svg';?></span>
						</div>
						<input type="text" name="subject" id="subject"
							class="form-control" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					<label>Message</label> <span id="content-info"
						class=" invalid-feedback"></span>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><?php require __DIR__ . 'assets/vendor/bootstrap/bootstrap-icons/pencil.svg';?></span>
						</div>
						<textarea class="form-control" rows="5" name="message"
							id="message" required></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input type="submit" name="send" class="btn btn-primary"
						value="Send Message" />
				</div>
			</div>
<?php
if (! empty($displayMessage)) {
    ?>
            <div class="row">
				<div class="col-md-8">
					<div id="statusMessage" class="alert alert-success mt-3"
						role="alert"><?php echo $displayMessage; ?>
					</div>
				</div>
			</div>
<?php
}
?>
		</form>
	</div>
	<script type="text/javascript" src=".assets/js/validation.js"></script>
</body>
</html>
