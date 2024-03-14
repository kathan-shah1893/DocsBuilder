<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Delete</title>
	
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
 include 'conn.php';
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
												<h3 class="tittle-w3"><span>Are You Sure for Delete?</span></h3>
										<form method="post"> 
											<input type="submit" name="yes" value="Yes">                 <input type="submit" name="no" value="No">
										</form>	
						<center>
                                    <a href="contact.php" class="ab">Need Help?</a><br/><a href="index2.php" class="ab"><--Back</a></form><br/>
                                  </center>
					</div>
					<div class="clearfix"></div>

				</center>
			</div
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
</html>
<?php 
 
  $id=$_SESSION['sess_uid'];
  if(isset($_POST['yes']))
  {
  	$sql="DELETE FROM achievement WHERE user_id='".$id."'";
  	$run2=mysqli_query($con,$sql);
  	if($run2)
    {
   	 $sql="DELETE FROM education WHERE u_id='".$id."'";
	 $run2=mysqli_query($con,$sql);
	 if($run2)
	 {
	 	$sql="DELETE FROM hobbies WHERE user_id='".$id."'";
		$run2=mysqli_query($con,$sql);
		 if($run2)
	     {
	 	   $sql="DELETE FROM resume_data WHERE user_id='".$id."'";
		   $run2=mysqli_query($con,$sql);
		   if($run2)
	       {
	 	     $sql="DELETE FROM card WHERE user_id='".$id."'";
		     $run2=mysqli_query($con,$sql);
		      if($run2)
	          {
	 	        $sql="DELETE FROM user WHERE user_id='".$id."'";
		        $run2=mysqli_query($con,$sql);
			    echo "<script>alert('Account deleted successfully');</script>";		     
				if (!isset($_GET['reload'])) 
	            {
      				echo '<meta http-equiv=Refresh content="0;url=logout.php">';
    			}		
			} 
	       }
	     }
	 }
    }
  }
  if(isset($_POST['no']))
  {
  	echo "<script>alert('Cancle the process of delete');</script>";
	if (!isset($_GET['reload'])) 
	{
      echo '<meta http-equiv=Refresh content="0;url=index2.php">';
    }
  }	 
?>