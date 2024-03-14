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
	include 'head.php';
	//session_start();
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
						<h3 class="tittle-w3"><span>Forgot Password</span></h3>
						<form method="POST">
							<p id="my1"> </p>
							Phone NO:
							<input type="text" name="uname" placeholder="Enter Your Phone No." required=""/>
							<input type="submit" name="clk" value="Check"><br/>
							<a href="contact.php" class="ab">Need Help?</a>
						</form>
						<?php
						if(isset($_POST['clk']))
						{
						$a=$_POST['uname'];
				//		echo $a;
						include 'conn.php';
  						$query=("SELECT * FROM user WHERE contact='". $a."'");
 						$ans=mysqli_query($con,$query);
						while($row = $ans->fetch_assoc()) 
  						{
   							$pass=$row['password'];
   				//			$con=$row['contact'];
  						}
  					    $count=mysqli_num_rows($ans);
						if($count==1)
						{
		$msg = 'Your New password is : '.$pass.' please Do not share it'; 
		$num = $a; 
		$fields = array(
		    "sender_id" => "TXTIND",
		    "message_text" => $msg,
		    "language" => "english",
		    "route" => "v3",
		    "numbers" => $num,
		);
		  $curl = curl_init();
		  curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=QuKqBir7yStFb8C4fYE5DlehIkPGwAJVxnWLpc61Nga3X9j20Zj1YyHZ0ipqD3rmnG4ElgSP8FTo9aht".urlencode('9999999999,8888888888,7777777777'),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($fields),
		  CURLOPT_HTTPHEADER => array(
		    "authorization: QuKqBir7yStFb8C4fYE5DlehIkPGwAJVxnWLpc61Nga3X9j20Zj1YyHZ0ipqD3rmnG4ElgSP8FTo9aht",
		    "accept: */*",
		    "cache-control: no-cache",
		    "content-type: application/json"
		  ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		     if (!isset($_GET['reload'])) 
		 	 {
               echo '<meta http-equiv=Refresh content="0;url=login.html?reload=1">';
             }
		}
						 	$_SESSION['for_user']=$a;
						 	echo "<script>alert('Password send in your text');</script>";
		 				}
						else
						{
							echo "<script>alert('sorry Phone Number are not found');</script>";
						}
  				 		}  
						?>
					</div>
					<div class="clearfix"></div>
				</center>
			</div>
		</div>
</div>
<!-- footer -->
<?php
 include 'footer.php';
?>
<!-- //footer -->
</div>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
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
	<script type="text/javascript">
		$(document).ready(function() {					
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
</body>
</html>