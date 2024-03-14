<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Forgot Password</title>
	
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
	<?php
	include 'conn.php';
	$k=$_GET['k'];
	//$q="SELECT * FROM education WHERE e_Id=".$k;
	//$q = "SELECT * FROM education WHERE e_Id=1"; 
	$q = "select *from education where e_Id=$k"; 
	$sql = mysqli_query($con,$q);
	if($sql)
	{
		 while($value= mysqli_fetch_array($sql))
		 {
		 	$a=$value['degree'];
		 	$b=$value['collage'];
		 	$c=$value['univercity'];
		 	$d=$value['passing_year'];
		 }
	}
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
						<form method="get">
							<p id="my1"> </p>
							<!--  <input type="text" name="fname" placeholder="Enter Full Name"  required=""> -->			
							 <input type="text" name="degree" placeholder="Enter Degree name" value="<?php echo $a ?>"required="">
							 <input type="text" name="collage" placeholder="Enter Collage name or school name"  required="" value="<?php echo $b ?>"> 
							 <input type="text" name="univercity" placeholder="Enter Univercity name"  required="" value="<?php echo $c ?>">
							 <input type="text" name="pass" placeholder="Enter Passing Year" required="" value="<?php echo $d ?>">
						<input type="submit" name="add" value="Submit"><br/><br/><!-- <input type="submit" name="clk" value="Submit"><br/> -->
							<a href="contact.php" class="ab">Need Help?</a><br/><a href="services.php" class="ab"><--Back</a></form><br/>
						<!--<a href="achievement.php" class="ab">Next--></a> 
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
			if(isset($_get['add']))
			{
				$d=$_get['degree'];
				$clg=$_get['collage'];
				$uni=$_get['univercity'];
				$pa=$_get['pass'];
				$uid=$_SESSION['sess_uid'];
				$sql="UPDATE education SET degree='$d',collage='$clg',univercity='$uni',passing_year='$pa' WHERE e_Id='$k'";
				$ans=mysqli_query($con,$sql);
				if($ans)
				{
				  echo "<script> alert('data Updated');</script>";
				}
				else
				{
				  echo "<script> alert('data not Updated');</script>";	
				}
			}
?>
</html>