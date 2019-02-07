<?php 
require_once("db/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign In & Sign Up</title>
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




<!-- banner -->
	<div class="banner">

 <!-- php for signup -->
  <?php 
	if (isset($_POST['signup'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$phone = $_POST['phone'];

		$sql="INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `pass`) VALUES (NULL, '$name', '$email', '$phone', '$address', '$pass')";


			if (!mysqli_query($con,$sql))
			  {
			  die('Error: ' . mysqli_error($con));
			  }

			echo '

			<div class="alert alert-success">
		<h5 class="text-center"> 
		<strong>Success!</strong> Registrtion successfull.
		</h5>

			 
			</div>


			';

	}


	 ?>




<!-- php for login -->
    <?php 

		       if(isset($_POST['login'])){
		            
		            //$name=  mysqli_real_escape_string($connect,$name);
		            $email=$_POST['email'];
		            $pass=$_POST['pass'];
		            $column=0;
		      //2. perform query.........
		       $sql="SELECT * FROM `customers` WHERE email='$email' AND pass='$pass' LIMIT 1";
		       $sqle=  mysqli_query($con, $sql); //here $result is resource file of query
		     if ($sqle) {
		  while ($row=mysqli_fetch_array($sqle)) {
		      $column = $column +1;
		echo '<div class="alert alert-success" style="text-align: center;">
		    <strong>You have successfully login!</strong>
		  </div>
		';   

		 $_SESSION['name']=$row['name'];
		 $_SESSION['email']=$row['email'];
		 $_SESSION['id']=$row['id'];

		    header('Location: index.php');
		  }
		  if ($column==0) {
		echo '<div class="alert alert-warning" style="text-align: center;">
		    <strong>Warning!</strong>do not match email or password!! please try again.
		  </div>
		';  }
		}
		       
		       }
     ?>
		<div class="w3l_banner_nav_right" style="width: 100%;">

<!-- login -->
		<div class="w3_login">

			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Sign up</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="login.php" method="post">
					  <input type="email" name="email" placeholder="Email" required=" ">
					  <input type="password" name="pass" placeholder="Password" required=" ">
					  <input type="submit" name="login" value="Login">
					</form>
				  </div>


				  <div class="form">
					<h2>Create an account</h2>
					<form action="login.php" method="post">
					  <input type="text" name="name" placeholder="name" required=" ">
					  <textarea name="address" id="input" class="form-control" rows="3" required="required" placeholder="Address"></textarea>


					  <input type="email" name="email" placeholder="Email Address" required=" ">

					  <input type="password" name="pass" placeholder="Password" required=" ">


					  <input type="text" name="phone" placeholder="Phone Number" required=" ">

					  <input type="submit" name="signup" value="Register">
					</form>
				  </div>

				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
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