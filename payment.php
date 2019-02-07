
<?php 
require_once("db/connection.php");
$id = $_POST['id'];

?>


<!DOCTYPE html>
<html>
<head>
<title>payment</title>
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

<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

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


<!-- sticky-nav -->
<?php include('includes/sticky_nav.php') ?>	

<!-- /sticky-nav -->



<!-- navbar -->
<?php include('includes/nav.php') ?>	

<!-- /navbar -->


<!-- banner -->
	<div class="banner">
		
		<div class="w3l_banner_nav_right" style="width: 100%;">
<!-- payment -->
		<div class="privacy about">
			<h3>Pay<span>ment</span></h3>

<!-- delevary info insert -->

			<!-- random no generator function -->
<?php 
function randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

 ?>
 <!-- random no generator function -->



			<?php

			  $fullname = $_POST['name'];
			  $phone = $_POST['phone'];
			  $address = $_POST['address'];

			  $p_name = $_POST['p_name'];
			  $price = $_POST['price'];

		      $orderid =  randomString();
			  

			 // if (!isset($id)) {
		  //   header('Location: index.php');

		  //     }

		      //insert
		 $sql="INSERT INTO `product_order` (`id`, `customer_name`, `phone`, `address`, `product_id`, `product_name`, `price`, `order_id`, `payment_status`, `payment_method`, `transection_id`) VALUES (NULL, '$fullname', '$phone', '$address', '$id', '$p_name', '$price', '$orderid','0','0','0')";

		if (!mysqli_query($con,$sql))
		  {
		  die('Error: ' . mysqli_error($con));
		  }
		echo '

		<h4 class="text-danger">please choose payment method: </h4>


		';

	 ?>

			
	         <div class="checkout-right">
				<!--Horizontal Tab-->
        <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
                <li>Mobile Bangking</li>
            </ul>
            <div class="resp-tabs-container hor_1">

				
                
                <div>
                                     <div class="vertical_post">
									  <form action="payment_confirm.php?id=<?php echo $id; ?>" method="post">
										<h5>Select From Popular Banks</h5>
										<div class="swit-radio">								
											<div class="check_box_one"> <div class="radio_one"> <label><input type="radio" name="payment_method" checked="" value="DBBL"><i></i>DBBL</label> </div></div>

											<div class="check_box_one"> <div class="radio_one"> <label><input type="radio" name="payment_method" value="Bkash"><i></i>Bkash</label> </div></div>
											
												
											<div class="check_box_one"> <div class="radio_one"> <label><input type="radio" name="payment_method" value="Mcash"><i></i>Mcash</label> </div></div>		
											<div class="clearfix"></div>
										</div>
										<div class="col-md-4">
											<input type="text" name="transection_id"  class="form-control" placeholder="enter transection id" required="required" >
										</div>

										<input type="submit" name="pay_confirm" value="CONFIRM">
									</form>
								</div>
                </div>
                
                
            </div>
        </div>
	
	

	<!-- // Pay -->
	
			 </div>

		</div>
<!-- //payment -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->



<!-- footer -->
  <?php include('includes/footer.php') ?>	
	
<!-- //footer -->


<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- easy-responsive-tabs -->    
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<script src="js/easyResponsiveTabs.js"></script>
<!-- //easy-responsive-tabs --> 
	<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
        <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->

<!-- //js -->
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