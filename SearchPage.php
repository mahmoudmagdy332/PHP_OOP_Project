

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
				 <?php
                      
                                  
                                 
                               session_start();
                                
                                  if(isset($_SESSION['log'])){
                                      
                                      echo "<li class='active'><a href='Profile.php'>Profile</a></li>";
                                      
				      echo " <li class='' ><form  action='index.php' method='post'><input class='linkToShowPackage'type='submit'  name='ssupm'value='Log Out'/></form></li>";
                                          if(isset($_POST['ssupm'])){
                                         
                                          session_unset();
                                          session_destroy();
                                          
                                      }
                                  }
                                   else {
                                      echo " <li class='' ><form   action='logIn.php' method='post'><input class='linkToShowPackage' type='submit'  name='supm'value='logIn'/>"
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


<!-- tour packages ------------------------------------------------------------------->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Discover our tour packages</h2>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row">
			
        <?php
        include 'back/user.php';
require_once ( 'back/places.php');
require_once ( 'back/subject.php');
  
   $su=$_POST['su'];
   $pl=$_POST['pa'];



$u=new user();
$e=count($u->searchforpackages($pl,$su));
$t=$u->searchforpackages($pl,$su);

for($i=0;$i<$e;$i++){
        echo "<div class='col-lg-3 col-sm-6'>".
					
				"<div class='image-tour position-relative'>".
						"<div class='rating'>".
								"<ul>".
									"<li><span class='fa fa-star'></span></li>".
									"<li><span class='fa fa-star'></span></li>".
									"<li><span class='fa fa-star'></span></li>".
									"<li><span class='fa fa-star'></span></li>".
									"<li><span class='fa fa-star'></span></li>".
								"</ul>".
							"</div>".
					"<img src="."images/".$t[$i]['image']. " alt='' class='img-fluid' />".
					"<p><span class='fa fa-tags'></span> <span>".$t[$i]['airline_price']."</span></p>".
				"</div>".
				"<div class='package-info'>".
					"<h6 class='mt-1'><span class='fa fa-map-marker mr-2'></span>".$t[$i]['place_name'].",". $t[$i]['subject_name']."</h6>".
					
					"<p class=''>".$t[$i]['going_time']."</p>".
					"<ul class='listing mt-3'>"
						."<li><span class='fa fa-clock-o mr-2'></span>Duration : <span>".$t[$i]['days'] ."Days</span></li>".
					"</ul>".
                                "<form method='post' action='Package.php'>".
                              
   "<input class='display_input' name='pa' value=".$t[$i]['Package_name']." />".
 
                               
                        "<input class='linkToShowPackage' type='submit'name='submit'value='veiw details'aria-hidden='true'class='fa fa-search'>"
                      
                         ." </form>".
				"</div>"
			."</div>";
                        echo "<br><br>";
                    }
        ?>
		</div>
	</div>
</section>
<!-- tour packages -------------------------------------------------------------------------------->



<!--// footer ------------------------>
<?php include ('includes/footer.php') ?>