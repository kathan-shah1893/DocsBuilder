<?php
 session_start();
 if(isset($_SESSION['sess_user']))
 {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Tools</title>
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
	<link rel="stylesheet" href="css/button.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
		<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
</head>
<body>
<!-- Navigation -->
<?php
 include 'conn.php';
 include 'header.php';
?>
<!-- //Navigation -->

<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- //inner services page -->
<!-- /inner_content -->
	<div class="inner_content_info_agileits py-5">
		<div class="container  py-md-3">
		<div class="w3-head-all mb-3">
		         <h3>Our Services</h3>
		       </div>
			<div class="inner_sec_grids_info_w3ls row">
				<div class="col-md-6 banner_bottom_left">
					<h4>Our popular Resume and Id card Templates for <span>Professionals / Students</span></h4>
					<p>Document builder is a web application by which a fresher belongs to any of degree uploads his personal, educational, technical skills and achievement data to our web application and based on that he/she can or download the resume or I card from various format in pdf prepared by our experts</p>
					<form method="post">
						<div class="click">
						<h4>CV Making</h4><br>
								<b>Education</b>
								<pre><a href="education.php" vspace="100">Add Education Details</a>        <a href="editcv.php" vspace="100px">Edit Education Details</a><br></pre>
								<b>Achievement</b>
								<pre><a href="achievement.php">Add Achievement Details</a>      <a href="editachievement.php">Edit Achievement Details</a><br></pre>
								<b>Skill</b>
								<pre><a href="skill.php">Add Skill Details</a>             <a href="editskill.php">Edit Skill Details</a><br></pre>
								<b>Hobbies</b>
								<pre><a href="hobbies.php">Add Hobbies Details</a>         <a href="edithobbies.php">Edit Hobbies Details</a><br></pre>
								<b>Get CV</b>
								<pre><a href="../web/OnePageResume/index.php">Download Templet-1</a>         <a href="../web/RR/srt-resume.php">Download Templet-2</a><br><br><a href="../web/testing.php">Download Word File</a><br></pre>
						<h4>I-card Making</h4><br>
						<pre><a href="i_card.php">Insert Data of I-card</a>       <a href="canvassing_excel.php">Show Data(Download excel)</a>
							<br><a href="editid.php">Edit I-card Details</a>
	<!--					<input type="submit" name="IDD" value="I.D. download" href="#" class="a"><input href="#" type="submit" name="IDE" value="I.D. Edit" class="a"><input type="submit" name="IDT" href="#" value="I.D. Templates" class="a"> --><br>
						<h4>Conversion</h4><br>
						     <pre><a href="https://smallpdf.com/word-to-pdf">Word To PDF</a>       <a href="https://smallpdf.com/pdf-to-word">PDF To Word</a></pre>
							 <pre><a href="https://smallpdf.com/excel-to-pdf">Excel TO PDF</a>	  <a href="https://smallpdf.com/pdf-to-excel">PDF TO Excel</a></pre>	
							 <pre><a href="https://smallpdf.com/ppt-to-pdf">PPT TO PDF</a>	  <a href="https://smallpdf.com/pdf-to-ppt">PDF TO PPT</a></pre>
		<!--				<input type="submit" href="#" name="CWP" value="Word To PDF" class="a"><input href="#" type="submit" name="CPW" value="PDF To Word" class="a"><br><br>
						<input type="submit" name="CEP" value="Excel To PDF" href="#" class="a"><input href="#" type="submit" name="CPE" value="PDF To Excel" class="a"><br><br>
						<input type="submit" name="CPP" value="PDF To PPT" href="#" class="a"><input href="#" type="submit" name="CPPD" value="PPT To PDF" class="a"><br><br>-->
						</div>
					</form>
					<?php 
					 if(isset($_POST['CVD']))
					 {
					    //header("Location:http://localhost/DocsBuilder/web/education.php");
					 	header('location:education.php');
					 }
					 if (isset($_POST['CVE'])) 
					 {
					 	header("location:education.php");
					 }
					?>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 banner_bottom_right">
					<div class="agileits_w3layouts_banner_bottom_grid">
						<img src="images/s1.jpg" alt=" " class="img-responsive img-fluid" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //inner services page -->
<!-- choose -->
	<div class="jarallax w3-agileits-choose py-5">
			<div class="container  py-md-3">
				<div class="w3-head-all mb-3 w3_choose_head">
		         <h3>Our Services</h3>
		       </div>
				<div class="agile-choose-grids row">
					<div class="col-lg-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fas fa-graduation-cap" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>CV Making</h4>
							<p>The main objective of document Builder is making a resume in various formats and he/she can download his/her resume. The main objective is to provide very good choices for a resume and we also give a ready-made resume with some personal information.</p>
						</div>
					</div>
					<div class="col-lg-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fas fa-pencil-alt" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>I-card Making</h4>
							<p>User can make his own I-card by just giving his informations and required elements and he/she can get ready made I-card.</p>
						</div>
					</div>
					<div class="col-lg-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fas fa-keyboard" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>PDF To/From Convertion</h4>
							<p>Pdf converter is a good way to keep down the paper consumption and keep your edited work in a digital file with the least amount of hassle. The other purpose of this project is a simple solution for creating a personal e filing system with a pdf converter user can manage pdf files and document information more effectively.</p>
						</div>
					</div>
				</div>	
			</div>
	</div>
<div class="stats">
		<div class="container">
		<div class="wthree_head_section stats_head">
					<h3>We are always ahead 
Professional Education for Your Future.</h3>
				</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 
			w3layouts_stats_left w3_counter_grid">
				<span class="fas fa-smile" aria-hidden="true"></span>
				<p class="counter">
				<?php 
				      $sql="SELECT * FROM user";
							$res=mysqli_query($con,$sql);
							$rec=mysqli_num_rows($res);
							echo $rec;
				?>		   	
				 </p>
				<h3>HAPPY CUSTOMERS</h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6   w3layouts_stats_left w3_counter_grid1">
				<span class="fas fa-bookmark" aria-hidden="true"></span>
				<p class="counter">
				<?php 
				      $sql="SELECT * FROM contact_us";
							$res=mysqli_query($con,$sql);
							$rec=mysqli_num_rows($res);
							echo $rec;
				?>
				</p>
				<h3>Contact Us</h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  w3layouts_stats_left w3_counter_grid2">
				<span class="fas fa-users" aria-hidden="true"></span>
				<p class="counter">
				<?php 
				      $sql="SELECT * FROM inquiry";
							$res=mysqli_query($con,$sql);
							$rec=mysqli_num_rows($res);
							echo $rec;
				?>
				</p>
				<h3>Total Inquiry</h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  w3layouts_stats_left w3_counter_grid3">
				<span class="fas fa-trophy" aria-hidden="true"></span>
				<p class="counter">50</p>
				<h3>AWARDS WON</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
			</div>
	</div>
	<!-- //stats -->
<!-- footer -->
<?php
 include 'footer.php';
?>
<!-- //footer -->


<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
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
}
else
{
	header("location:login.html");
}
?>