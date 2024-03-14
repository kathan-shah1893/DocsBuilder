<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Education</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Success path Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	<style>
		.ab{
			text-align: right;
			float: left;
		}
		.c{
			color: white;
			float: right;
		}
		*{
			color: white;
		}
	</style>
</head>
<body>
<!-- Navigation -->
<!-- //Navigation -->
<?php
 //session_start();
 include 'head.php';
?>
<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">		
	</div>
</section>
<!-- //inner page banner -->
<div class="container-fluid">	
			<div class="row">
				<div class="col-lg-12 map ">
				<center><div class="col-lg-5 mail-grid1-form ">
						<h3 class="tittle-w3"><span>Education Details</span></h3>
						<form method="post">
							<p id="my1"> </p>
							<!--  <input type="text" name="fname" placeholder="Enter Full Name"  required=""> -->			
							 <input type="text" name="degree" placeholder="Enter Degree name" required="" pattern="[^0-9]+">
							 <input type="text" name="collage" placeholder="Enter Collage name or school name"  required="" pattern="[^0-9]+">
							 <input type="text" name="univercity" placeholder="Enter Univercity name"  required="" pattern="[^0-9]+">
							 <input type="text" name="pass" placeholder="Enter Passing Year" required="" pattern="^((19|20)\d\d)$">
						<!-- ^(
							 	(
							 		(
							 			(0[13578])|([13578])|(1[02])
							 		)
							 		[\/]
							 		(
							 			([1-9])|([0-2][0-9])|(3[01])
							 		)
							 	)

							 	|

							 	(
							 		(
							 			(0[469])|([469])|(11)
							 		)
							 		[\/]
							 		(
							 			([1-9])|([0-2][0-9])|(30)
							 		)
							 	)

							 	|

							 	(
							 		(2|02)[\/](([1-9])|([0-2][0-9]))
							 	)
							 )

							 [\/]\d{4}$|^\d{4}$

							 ^((19|20)\d\d)$ -->
						<input type="submit" name="add" value="Submit"><br/><br/><!-- <input type="submit" name="clk" value="Submit"><br/> -->
					<!-- 	<a href="editcv.php">View All Education Details</a> -->
							<a href="contact.php" class="ab">Need Help?</a><br/><a href="services.php" class="ab"><--Back</a></form><br/></form>
							<?php
							// if (isset($_POST['add'])) 
							// {
							//   echo "<a href='achievement.php' class='ab'>Next--></a>";
							// }
							?>
						</form>
					</div>
					<div class="clearfix"></div>
				</center>
			</div>
		</div>
</div>
<?php
 include 'footer.php';
?>
</div>
<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
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
</body>
<?php
include 'conn.php';
			if(isset($_POST['clk']) || isset($_POST['add']))
			{
				$d=$_POST['degree'];
				$clg=$_POST['collage'];
				$uni=$_POST['univercity'];
				$pa=$_POST['pass'];
				$uid=$_SESSION['sess_uid'];
				$sql="INSERT INTO education(degree,collage,univercity,passing_year,u_id) VALUES('$d','$clg','$uni','$pa','$uid')";
				$ans=mysqli_query($con,$sql);
				if($ans)
				{
				  echo "<script> alert('data inserted');</script>";
				}
				else
				{
				  echo "<script> alert('data not inserted');</script>";	
				}
				
			}
?>
</html>