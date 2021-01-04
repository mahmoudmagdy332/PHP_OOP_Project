<!DOCTYPE html>
<html lang="en">
<head>
<title>Grand Tour Travel Category Flat Bootstrap Responsive Web Template | Packages :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/styless.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	

	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="index.html"><span class="fa fa-map-signs"></span> Grand Tour </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="index.php">Home</a></li>
                                <li class=""><a href="packages.php">Packages</a></li>
			</ul>
		</nav>
		<!-- //nav -->
		
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="home" id="home">
	<div class="">
	</div>
</section>
<!-- //banner -->
  <?php    
$fnameErr =$lnameErr= $emailErr =$repassErr= $passErr = "";
$xc=$fname = $email =$lname ="";
 
  if(isset($_POST['submit'])){
  include  'back/user.php';
 $u=new user();
 
   if($u->search_foremail($_POST['email'])){
      $emailErr="This site already exists"; 
   }
   elseif(empty($email=$_POST['email'])){
    $emailErr = "Email is required";
}
 elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }

        
       if(empty($fname=$_POST['fname'])){
           
           $fnameErr = "user firist name is required";
       }
      elseif (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
    
       }
        if(empty($lname=$_POST['lname'])){
           
           $lnameErr = "user last name is required";
       }
       elseif (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
    
       }
            if(empty($_POST['password'])){
                  $passErr = "password is required"; 
               }

           if(empty($_POST['repassword'])){
             $repassErr = "repassword is required";
}

             if($_POST['password']!=$_POST['repassword']){
                  
                 $repassErr="حاول مرة اخرى ";
     }
           
if($emailErr==""&&$fnameErr==""&&$passErr==""&&$repassErr==""&&$lnameErr==""){
 $xc="sign up is sucsesful";

           $u->user_fname=$_POST['fname'];
           $u->user_lname=$_POST['lname'];
           $u->user_password=$_POST['password'];
           $u->user_email=$_POST['email'];
           $u->user_city=$_POST['city'];
           $u->user_phone=$_POST['pnomber'];
           $u->signup();


     
}
  }
?>
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4" id="container_signup">
        <h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Sign Up </h2>
        <div class="signup">
            <div class="col-lg-7 contact-left-form">
                <form action="#" method="post" class="row">
                    <div class="col-sm-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="First name" required="" name="fname">
                        <span class="error"> <?php echo  $fnameErr; ?></span>
                    </div>
                    <div class="col-sm-6 form-group contact-forms">
                    <input type="text" class="form-control" placeholder="Last name" required=""name="lname">
                    <span class="error"> <?php echo  $lnameErr; ?></span>
                    </div>
                    <div class="col-sm-6 form-group contact-forms">
                     <input type="email" class="form-control" placeholder="Email" required=""name="email">
                    <span class="error"> <?php echo  $emailErr; ?></span>
                    </div>
                    <div class="col-sm-6 form-group contact-forms">
                    <input type="text" class="form-control" placeholder="Phone number" required=""name="pnomber"> 
                    </div>
                    <div class="col-sm-6 form-group contact-forms">
                    <input type="password" class="form-control" placeholder="Password" required=""name="password"> 
                    <span class="error"> <?php echo  $passErr; ?></span>
                    </div>
                    <div class="col-sm-6 form-group contact-forms">
                        <input type="password" class="form-control" placeholder="Confirm password" required="" name="repassword"> 
                         <span class="error"> <?php echo  $repassErr; ?></span>
                    </div>
                    <div class="col-md-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="City" required="" name="city"> 
                    </div>
                    <div class="col-md-12 booking-button">
                         <span class="error"> <?php echo  $xc; ?></span>
                        <input type="submit"value="SignUp" id="lg" class="btn btn-block sent-butnn" name="submit">
                        
                    </div>
                </form>
            </div>
        </div>
	</div>
</section>
<!-- //Booking -->




<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-lg-4 py-3">
		<div class="row footer-top">
			<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Address</h3>
				</div>
				<div class="footer-text">
					<p>Location : 1234 lock, Charlotte, North Carolina, United States</p>
					<p>Phone : +12 534894364</p>
					<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
					<p>Fax : +12 534894364</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Vivamus magna justo, laci niats eget consectetur sed, conval lis at tellus. Nulla quis lorem ipnt libero.
					Lorem ipsum dolor.</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Travel Places</h3>
				</div>
				<div class="row">
					<ul class="col-6 links">
						<li><a href="#choose" class="scroll">New Zealand </a></li>
						<li><a href="#overview" class="scroll">Paris, France </a></li>
						<li><a href="#pricing" class="scroll">Los Angles</a></li>
						<li><a href="#faq" class="scroll"> Darlington</a></li>
						<li><a href="#testimonials" class="scroll">Canada </a></li>
						<li><a href="#contact" class="scroll"> South Africa </a></li>
					</ul>
					<ul class="col-6 links">
						<li><a href="#">Spain </a></li>
						<li><a href="#">Turkey </a></li>
						<li><a href="#faq" class="scroll">Europe </a></li>
						<li><a href="#">Italy </a></li>
						<li><a href="#">Sweden </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Newsletter</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2019 Grand Tour. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

	
</body>
</html>