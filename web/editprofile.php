<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Edit Profile</title>	
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
<?php
 include 'head.php';
?>
<!-- //Navigation -->

<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
	<?php
	include 'conn.php';
	$k=$_GET['k'];
	$q = "select *from user where user_id='".$_SESSION['sess_uid']."'"; 
	$sql = mysqli_query($con,$q);
	if($sql)
	{
		 while($value= mysqli_fetch_array($sql))
		 {
		 	$name=$value['name'];
		 	$add=$value['Address'];
		 	$city=$value['city'];
		 	$pincode=$value['pincode'];
		 	$state=$value['state'];
		 	$phone=$value['contact'];
		    $email=$value['email'];
		    $log=$value['image'];
		    echo $log;
		 }
	}
	?>
</section>
<!-- //inner page banner -->
<div class="container-fluid">	
			<div class="row">
				<div class="col-lg-12 map ">
				<center><div class="col-lg-5 mail-grid1-form ">
						<h3 class="tittle-w3"><span>Edit Profile</span></h3>
						<form method="post" enctype="multipart/form-data">
							<p id="my1"> </p>
							 <input type="text" name="fname" placeholder="Enter Full Name" required pattern="[^0-9]+" value="<?php echo $name ?>">							 
							 <textarea name="address" placeholder="Enter Your Address" rows="2" cols="2" ><?php echo $add ?></textarea>
							  <input type="text" name="city" placeholder="Enter City Name" required pattern="[a-zA-Z]+" value="<?php echo $city ?>">                 
							  <input type="text" name="pincode" placeholder="Enter Pincode Here" required pattern="[0-9]{6}" value="<?php echo $pincode ?>"><br>
							  <input type="text" name="state" placeholder="Enter State Here" required pattern="[a-zA-Z]+" value="<?php echo $state ?>"><br>
							<input type="email"	 name="email" placeholder="Enter Your Email-id" required="" disabled value="<?php echo $email ?>"/>
							<input type="text" id="phone" name="phone" placeholder="Enter Phone Number" required="" pattern="[6-9]{1}[0-9]{9}" value="<?php echo $phone ?>"/>
							Old Profile<br>
							<?Php echo "<img src='../web/OnePageResume/".$log. "'width='100' height='100'>"; ?>
							<br>
							Enter New Profile
							<input type="file" id="phone" name="image" accept="image/jpg,image/png,image/jpeg" />
							<input type="submit" name="clk" value="Submit"><br/>
							<a href="contact.php" class="ab">Need Help?</a><br/><a href="index2.php" class="ab"><--Back</a></form><br/>
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
					$nm=$_POST['fname'];
					$ct=$_POST['city'];
					$contact=$_POST['phone'];
					$code=$_POST['pincode'];
					$add=$_POST['address'];
					$stt=$_POST['state'];
					$k=$_SESSION['sess_uid'];
				    $filename= addslashes($_FILES['image']['name']);
 	                $tmpname= addslashes($_FILES['image']['tmp_name']);
 					date_default_timezone_set("Asia/Calcutta");
 					$iname=(string)(date("YmdHis"));
 					$extension=pathinfo($filename,PATHINFO_EXTENSION);
 					$image_path="$iname.".$extension;
 					echo $image_path;
 					if(isset($filename)) 					
 					{
 						move_uploaded_file($_FILES['image']['tmp_name'],'OnePageResume/'.$image_path);
 					}
					 $sql="UPDATE user SET user_id='$k',name='$nm',city='$ct',contact='$contact',pincode='$code',Address='$add',state='$stt',image='$image_path' WHERE user_id='$k'" ;
					 $ans=mysqli_query($con,$sql);
					 if($ans)
					 {
					 	echo "<script> alert('Data Updated');</script>";
					 	if (!isset($_GET['reload'])) 
					 	{
                           echo '<meta http-equiv=Refresh content="0;url=index2.php?reload=1">';
                        }
					 }
					 else
					 {
						echo "<script> alert('Data Not Updated');</script>";
					 }
				    }
			}
		}
?>
</html>