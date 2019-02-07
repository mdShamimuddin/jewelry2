<?php 
require_once("db/connection.php");

if (Auth()) {
	$id = $_SESSION['id'];
} else {
	header('Location: login.php');	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>

	<!-- header -->
	<?php include('includes/header.php'); ?>
	<!-- /header -->


	<!-- script-for sticky-nav -->
	<script>
		$(document).ready(function() {
			var navoffeset=$(".agileits_header").offset().top;
			$(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".agileits_header").addClass("fixed");
				}else{
					$(".agileits_header").removeClass("fixed");
				}
			});

		});
	</script>
	<!-- //script-for sticky-nav -->


	<!-- sticky-nav -->
	<?php include('includes/sticky_nav.php') ?>	

	<!-- /sticky-nav -->



	<!-- navbar -->
	<?php include('includes/nav.php') ?>	

	<!-- /navbar -->



	<?php
	$sql="SELECT * FROM `customers` WHERE id = $id";
	$sqle=mysqli_query($con,$sql);

	if($sqle){
		while($row=mysqli_fetch_array($sqle)){

			$name = $row['name'];
			$address = $row['address'];

			$email = $row['email'];
			$pass = $row['pass'];

			$phone = $row['phone'];




		}
	}
	?>  




	<!-- banner -->
	<div class="banner">

		<!-- php for signup -->

		<div class="w3l_banner_nav_right" style="width: 100%;">

			<!-- login -->
			<div class="w3_login">


				<div class="panel panel-primary">
					<div class="panel-heading"><h3>Profile</h3></div>
					<div class="panel-body">

						<div class="row">
							<div class="col-md-6">


								<table class="table table-hover borderless ">
									<thead>
                                        <tr>
											<h3 class="text-center text-muted">Personal Information</h3>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Name</td>
											<td><?php echo  "$name"; ?></td>
										</tr>

										<tr>
											<td>Email</td>
											<td><?php echo  "$email"; ?></td>
										</tr>

										<tr>
											<td>Phone</td>
											<td><?php echo  "$phone"; ?></td>
										</tr>

										<tr>
											<td>Address</td>
											<td><?php echo  "$address"; ?></td>
										</tr>

									</tbody>
								</table>
								


							</div>

							<div class="col-md-6">


								<table class="table table-hover borderless ">
									<thead>
										<tr>
											<h3 class="text-center text-muted">Buying Information</h3>

										</tr>
									</thead>
									<tbody>
										<tr>
											<th>Product Name</th>
											<th>payment Status</th>
											<th>Arive Status</th>

										</tr>

										<tr>
											<td>Stylish Nupur</td>
											<td>pending</td>
											<td>In progress</td>

										</tr>

									</tbody>
								</table>
								


							</div>

						</div>

					</div>
				</div>

			</div>
			<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //banner -->




	<!-- footer -->
	<?php include('includes/footer.php') ?>	
	
	<!-- //footer -->





	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
					$(this).toggleClass('open');        
				},
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
					$(this).toggleClass('open');       
				}
				);
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->
		<script src="js/minicart.js"></script>
		<script>
			paypal.minicart.render();

			paypal.minicart.cart.on('checkout', function (evt) {
				var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>