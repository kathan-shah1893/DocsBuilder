<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | I-Card Details</title>
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
<div class="container-fluid">	
			<div class="row">
				<div class="col-lg-12 map">
				<center><div class="col-lg-5 mail-grid1-form ">
						<h3 class="tittle-w3"><span>Enter Details</span></h3>
						<form method="post" enctype="multipart/form-data">
							<p id="my1"> </p>
							 <input type="text" name="cname" placeholder="Enter Organization name" required="">
							 <input type="text" name="name" placeholder="Enter Employee name" required="">
							 <input type="text" name="post" placeholder="Enter Post of Employee"  required="">
							 <input type="text" name="address" placeholder="Enter Address of Employee" required="">
							 <input type="text" name="phone" placeholder="Enter Phone No. of Employee" required="">
							 <input type="text" name="DOB" placeholder="Enter D.O.B of Employee" required="">
							 <input type="email" name="mail" placeholder="Enter E-mail of Employee" required="">
							 <h5>Enter Profile of Empolyee</h5><br><input type="file" name="image" accept="image/jpg,image/png,image/jpeg" required="" />
							 <h5>Enter Signature</h5><br><input type="file" name="logo" accept="image/jpg,image/png,image/jpeg"/>
							 <input  type="submit" name="add" value="Submit"/> <br/><br/>
							<a href="contact.php" class="ab">Need Help?</a></form><br/>
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
			if(isset($_POST['add']))
			{
				$cname=$_POST['cname'];
				$name=$_POST['name'];
				$post=$_POST['post'];
				$add=$_POST['address'];
				$dob=$_POST['DOB'];
				$mail=$_POST['mail'];
				//$pro=$_POST['images'];
				//$log=$_POST['logo'];
				$po=$_POST['phone'];
				// $target_dir= "Profile/";
				// $target_file=$target_dir.basename($_FILES['image']['name']);
				// $upload=1;
				// $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
				// if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
				// {
				// 	echo "<script> alert('data inserted');</script>";
				// }
			    $filename= addslashes($_FILES['logo']['name']);
 	                $tmpname= addslashes($_FILES['logo']['tmp_name']);
 					date_default_timezone_set("Asia/Calcutta");
 					$iname=(string)(date("YmdHis")).'L';
 					$extension=pathinfo($filename,PATHINFO_EXTENSION);
 					$image_path2="$iname.".$extension;
 					echo $image_path2;
 					if(isset($filename)) 					
 					{
 						move_uploaded_file($_FILES['logo']['tmp_name'],'Profile/'.$image_path2);
 					}
 			    $filename= addslashes($_FILES['image']['name']);
 	                $tmpname= addslashes($_FILES['image']['tmp_name']);
 					date_default_timezone_set("Asia/Calcutta");
 					$iname=(string)(date("YmdHis"));
 					$extension=pathinfo($filename,PATHINFO_EXTENSION);
 					$image_path="$iname.".$extension;
 					echo $image_path;
 					if(isset($filename)) 					
 					{
 						move_uploaded_file($_FILES['image']['tmp_name'],'Profile/'.$image_path);
 					}
				$sql="INSERT INTO card(C_name,name,post,address,phone,profile,DOB,email,logo,user_id) VALUES('$cname','$name','$post','$add','$po','$image_path','$dob','$mail','$image_path2',".$_SESSION['sess_uid'].")";
				$ans=mysqli_query($con,$sql);
				if($ans)
				{
				  echo "<script> alert('data inserted');</script>";
				  if (!isset($_GET['reload'])) 
 				  {
 	  				echo '<meta http-equiv=Refresh content="0;url=../web/choice.php">';
    			  }
				}
				else
				{
				  echo "<script> alert('data not inserted');</script>";	
				}
			}
?>
</html>