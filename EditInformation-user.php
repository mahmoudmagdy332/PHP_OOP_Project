

<!DOCTYPE html>
<html lang="en">
<head>
<title>Grand Tour Travel Category Flat Bootstrap Responsive Web Template | Contact :: w3layouts</title>
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
	
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/simple-sidebar.css" rel="stylesheet">
	
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
				<li class="active"><a href="Profile.php">Profile</a></li>
				 <li class='' ><form  action='index.php' method='post'>
                                         <input type='submit'  name='ssupm'value='Log Out'/></form></li>
                                <?php        
                                if(isset($_POST['ssupm'])){
                                         
                                          session_unset();
                                          session_destroy();
                                          }
				?>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="home" id="home">
	<div class="cover_banner">
			
	</div>
</section>
<!-- //banner -->

<div class="page-content">
    <div class="sidebar">
            <div class="links-sidebar">
                    <a href="Profile.php" >Personal information</a>
                    <a href="#" >Edit information</a>
                    <a href="Profile-history.php" >History</a> 
             </div>
		</div>
    <section class="contact py-5">
        <div class="container py-lg-5 py-sm-4" id="container_signup">
            <div class="signup">
                <div class="col-lg-7 contact-left-form">
                    <form action="#" method="post" class="row">
                        <div class="col-sm-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="First name" >
                        </div>
                        <div class="col-sm-6 form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Last name" >
                        </div>
                        <div class="col-sm-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Email" > 
                        </div>
                        <div class="col-sm-6 form-group contact-forms">
                        <input type="number" class="form-control" placeholder="Phone number" > 
                        </div>
                        <div class="col-sm-6 form-group contact-forms">
                        <input type="password" class="form-control" placeholder="Password" > 
                        </div>
                        <div class="col-sm-6 form-group contact-forms">
                        <input type="password" class="form-control" placeholder="Confirm password" > 
                        </div>
                        <div class="col-md-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="City" > 
                        </div>
                        <div class="col-md-12 booking-button">
                            <button class="btn btn-block sent-butnn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- //Booking -->




<?php include ('includes/footer.php') ?>