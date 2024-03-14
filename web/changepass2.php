<?php
session_start();
if (isset($_SESSION['sess_user'])) 
{
	include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Change password</title>
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

<!DOCT
<!-- Navigation -->

<!-- //Navigation -->

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
						<h3 class="tittle-w3"><span>Change Password</span></h3>
						<form method="post">
							<p id="my1"> </p>
							<input type="email"	 name="mailid" placeholder="Enter Email id" disabled required="" value="<?php
								//session_start();
								$mail=$_SESSION['sess_user'];			
   								echo $mail;
							?>" />
							<input type="password"	 name="opass" placeholder="Enter Your Old Password" required="" />
							<input type="password"	 name="npass" placeholder="Enter New Password" required="" />
							<input type="password"	 name="cpass" placeholder="Enter Confirm Password" required="" />
							<a href="forgot1.php" class="ab">Forgot Password</a><br/><br/>
							<input type="submit" name="clk" value="Submit"><br/>
							<a href="contact.php" class="ab">Need Help?</a>
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

<?php

	$con=mysqli_connect("localhost","root","");
	if(!($con))
	{
		echo "connection error";
	}
	else
	{
		$db=mysqli_select_db($con,"docs builder");
		if(!($db))
		{
			echo "Database error";
		}
		else
		{
			if(isset($_POST['clk']))
			{
				$op=$_POST['opass'];
				$np=$_POST['npass'];
				$cp=$_POST['cpass'];
				$e=$_SESSION['sess_user'];
				$checkemail="SELECT email FROM user WHERE password='$op' AND email='$e'";
				$ans=mysqli_query($con,$checkemail);
                $count=mysqli_num_rows($ans);
				if($count==1)
				{
					if($np==$cp)
					{
						echo "<script> alert('both password is same');</script>";
						$sql="UPDATE user SET password='$cp' WHERE email='$e'";
					 	$ans1=mysqli_query($con,$sql);
					 	if($ans1)
					 	{
					 		echo "<script> alert('password changed');</script>";
					 	}
					 	else
					 	{
							echo "<script> alert('password not changed');</script>";
					 	}
					}
					else
					{
						echo "<script> alert('both password is not same');</script>";
					}

				}
				else
				{
					echo "<script> alert('you enter wrong password');</script>";
				}
			}
		}
	}
?>

</body>
</html>
<?php
}
?>