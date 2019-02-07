
<?php 
require_once("db/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>jewellery shop</title>
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


<!-- sticky-nav -->
<?php include('includes/sticky_nav.php') ?>	

<!-- /sticky-nav -->



<!-- navbar -->
<?php include('includes/nav.php') ?>	

<!-- /navbar -->






<!-- banner -->
	<div class="banner">

		<!-- sidebar start -->
         <?php include('includes/sidebar.php') ?>	
		
		<!-- sidebar end -->
          

        <!-- slider start -->
         <?php include('includes/slider.php') ?>	
         
        <!-- slider end -->


		<div class="clearfix"></div>
	</div>
<!-- banner -->






<!-- top-brands -->
<div class="top-brands">
	<div class="container">

		<div class="agile_top_brands_grids">


			<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>Hot Offers</h3>

			<!-- start fetch category -->
				<?php 

				$sql="SELECT * FROM `category`";
				$sqle=mysqli_query($con,$sql);

				if($sqle){
					while($row=mysqli_fetch_array($sqle)){

						$category = $row['category_name'];

				?>
             

<!-- start category -->
			<div class="w3ls_w3l_banner_nav_right_grid1">
				<h6><?php echo $category; ?></h6>

	<?php
		$sql1="SELECT * FROM `product` WHERE category = '$category' ORDER BY id DESC LIMIT 4";
		$sqle1=mysqli_query($con,$sql1); 

		if($sqle1){
		  while($row=mysqli_fetch_array($sqle1)){

   ?>

				<div class="col-md-3 w3ls_w3l_banner_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">

										<div class="snipcart-thumb">
											<a href="product-details.php?id=<?php echo $row['id']; ?>"><img src="admin/images/<?php echo $row['image']; ?>" alt=" " class="img-responsive" /></a>

											<p><?php echo $row['name']; ?></p>
											<h4><?php echo '$'.$row['price']; ?> <span><?php echo '$'.($row['price']+10); ?></span></h4>
										</div>

										<div class="snipcart-details">
							                 <form action="checkout.php" method="post">
							                 	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
											
												<fieldset>
													
													<input type="submit" name="submit" value="Buy Now" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<?php }} ?>

				
				<div class="clearfix"> </div>
			</div>


			<!-- end category -->








			<?php }} ?> <!-- end fetch category -->




              



				
				
			</div>



			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //top-brands -->










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

