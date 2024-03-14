<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Contact-us</title>
	
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
	
</head>

<body>


<!-- Navigation -->
<?php
 include 'head.php';
?>
<section class="innerpage_banner py-5">
	<div class="dot1">
	</div>
</section>
				<div class="mail py-5" id="contact">
					<div class="container-fluid  py-md-3">	
						<div class="w3-head-all mb-3">
							<h3>Contact Us</h3>
							</div>
						   <div class="w3-agile_info row">
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts">
								<i class="fas fa-mobile-alt" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Phone</p><span>+91 9104141376</span>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts">
								<i class="far fa-envelope" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Email</p><a href="mailto:builderdocument@gmail.com">builderdocument@gmail.com</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts mail-agileits-w3layouts1">
								<i class="fas fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Address</p><span>Government Polytechnic Ahmedabad, Gujarat , India.</span>
								</div>
							</div>
							<div class="clearfix"></div>
							 </div>
						</div>
	<div class="container-fluid">	
			<div class="row">
				<div class="col-lg-7 map ">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14687.72882208152!2d72.547567!3d23.0262613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbbc57db3ec7081c2!2sGovernment%20Polytechnic%20Ahmedabad!5e0!3m2!1sen!2sin!4v1635064369496!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
					<div class="col-lg-5 mail-grid1-form ">
						<h3 class="tittle-w3"><span>Send a </span>Message</h3>
						<form method="post">
							<input type="text" name="Name" placeholder="Your Name" required="" />
							<input type="text" name="phone" placeholder="Your Phone" required="" pattern="[6-9]{1}[0-9]{9}"/>
							<input type="email" name="Email" placeholder="your Email" required="" />
							<textarea name="Message" placeholder="Your Message...." required=""></textarea>
							<input type="submit" name="clk" value="Submit">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				</div>

<?php
 include 'footer.php';
?>
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
<?php
include 'conn.php';
	if(isset($_POST['clk']))
	{
		$a=$_POST['Name'];
		$b=$_POST['Email'];
		$d=$_POST['Message'];
		$c=$_POST['phone'];
					$sql="INSERT INTO contact_us (name,email,phone,message) VALUES ('$a','$b','$c','$d')";
					$q=mysqli_query($con,$sql);
					if($q)
					{
						 echo "<script> alert('Message sent');</script>";
					}
					else
					{
						echo "<script> alert('Message Are not sent');</script>";
					}
	}
?>