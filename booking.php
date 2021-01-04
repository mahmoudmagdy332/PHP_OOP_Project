<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Grand Tour Travel Category Flat Bootstrap Responsive Web Template | Booking :: w3layouts</title>
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
    <link href="css/styles.css" rel='stylesheet' type='text/css' /><!-- custom css -->
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
				    
                                <?php
                      
                                  
                                 
                               session_start();
                                
                                  if(isset($_SESSION['log'])){
                                      
                                      echo "<li class=''><a href='Profile.php'>Profile</a></li>";
                                      
				      echo " <li class='' ><form  action='index.php' method='post'><input type='submit'  name='ssupm'value='Log Out'/></form></li>";
                                          if(isset($_POST['ssupm'])){
                                         
                                          session_unset();
                                          session_destroy();
                                          
                                      }
                                  }
                                   else {
                                      echo " <li class='' ><form  action='logIn.php' method='post'><input type='submit'  name='supm'value='logIn'/>"
                                       . "<input type='text' name='m'value='index.php' class='display_input' />"
                                              . "</form></li>"; 
                                      
                                   }
                       
                              
                             
                                        ?>
                      
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


<!-- Booking -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Book Your Tour</h2>
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-7 contact-left-form">
                                                        <?php
                                   
                             
                             include 'back/user.php';
                                    $r=new user();
                                      
  
                                      echo "<form action='#' method='post' class='row'>
						<div class='col-sm-6 form-group contact-forms'>
                                               <input type='text' class='form-control' value=" . $_POST['pa']. " name=' pn'>
						</div>
						<div class='col-sm-6 form-group contact-forms'>
                                              <input type='email' class='form-control' value=".$_SESSION['log'] . " name='email' >
						</div>
						<div class='col-sm-6 form-group contact-forms'>
                                                    <input type='text' class='form-control' placeholder='zip code' required='' name='zip'> 
						</div>
						<div class='col-sm-6 form-group contact-forms'>
						  <select class='form-control' id='adults'name='pr'>
								<option>price</option>
								<option>airline_price</option>
								<option>bus_price</option>
								<option>train_price</option>
								
							</select>
						</div>
						<div class='col-sm-6 form-group contact-forms'>
                                                    <select class='form-control' id='adults'name='ad'>
								<option>Adults</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5 or more</option>
							</select>
						</div>
						<div class=col-sm-6 form-group contact-forms'>
                                                    <select class='form-control' id='kids' name='am'>
								<option>Amenties</option>
								";
                                                                include 'back/user.php';
                                                          $u=new user();
                                                          $b=$u->get_amenities();
                                                          $r= count($b);
                                                         
                                                
                                                                        ?>
							</select>
						</div>
						<div class="col-md-12 form-group contact-forms">
						  <textarea class="form-control" placeholder="Message" rows="3" required=""></textarea>
						</div>
						<div class="col-md-12 booking-button">
                                                    <button class="btn btn-block sent-butnn" name="sub">Book Now</button>
						</div>
					</form>
				</div>
				<div class="col-lg-5 contact-right pl-lg-5">
				
					<div class="image-tour position-relative">
						<img src="images/banner1.jpg" alt="" class="img-fluid" />
						<p><span class="fa fa-tags"></span> <span>20$ - 15% off</span></p>
					</div>
					
					<h4>Tour Description</h4>
					<p class="mt-3">Duis nisi sapien, elementum finibus ferme ntum ed eget, aliquet et leo. Mauris hendrerit vel ex.
					vitae luctus massa. Phas ellus sed aliquam leo et dolor. Vestibulum ullamcorper massa eut sed fringilla.</p>
					
				</div>
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