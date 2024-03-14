<?php
 session_start();
 if(isset($_SESSION['sess_user']))
 {
?>
<!DOCTYPE html>
<!-- saved from url=(0039)file:///C:/DocsBuilder/web/gallery.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Docs BUilder | Template</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="keywords" content="Success path Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
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
	<link rel="stylesheet" href="./qqqq_files/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="./qqqq_files/style.css" type="text/css" media="all"> <!-- Style-CSS --> 
	<link rel="stylesheet" href="./qqqq_files/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- /gallery-->
	<link href="./qqqq_files/simpleLightbox.css" rel="stylesheet" type="text/css">
		<!-- web-fonts -->
	<link href="file://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="file://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>
<body>
<!-- Navigation -->
<?php
 include 'header.php';
?>
<!-- //Navigation -->
<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- //inner page banner -->
<!-- gallery -->

	<div class="banner-bottom gallery py-5">
		<div class="container  py-md-3">
		<div class="w3-head-all mb-3">
		         <h3>Our Gallery</h3>
		       </div>
			<div class="w3ls_gallery_grids row">
				<div class="col-lg-4  w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="./qqqq_files/g1.jpg" class="img-fluid">
							<div class="agile_gallery_grid1">
								<img src="./qqqq_files/g1.jpg" alt=" " class="img-responsive img-fluid">
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Docs</h3>
									<p> Builder</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="./qqqq_files/g2.jpg" class="img-fluid">
							<div class="agile_gallery_grid1">
								<img src="./qqqq_files/g2.jpg" alt=" " class="img-responsive img-fluid">
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Docs</h3>
									<p> Builder</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="./qqqq_files/g3.jpg" class="img-fluid">
							<div class="agile_gallery_grid1">
								<img src="./qqqq_files/g3.jpg" alt=" " class="img-responsive img-fluid">
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Docs</h3>
									<p> Builder</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="./qqqq_files/g4.jpg" class="img-fluid">
							<div class="agile_gallery_grid1">
								<img src="./qqqq_files/g4.jpg" alt=" " class="img-responsive img-fluid">
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Docs</h3>
									<p> Builder</p>
								</div>
							</div>
						</a>
					</div>	
			</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

<!-- //gallery -->


<!-- footer -->
<?php
 include 'footer.php';
?>
<!-- //footer -->


<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="./qqqq_files/jquery-2.1.4.min.js.download"></script>
	<script type="text/javascript" src="./qqqq_files/bootstrap.js.download"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- simpleLightbox -->
		<script src="./qqqq_files/simpleLightbox.js.download"></script>	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
<!-- //simpleLightbox -->
	<!-- start-smoth-scrolling -->
	<script src="./qqqq_files/SmoothScroll.min.js.download"></script>
	<script type="text/javascript" src="./qqqq_files/move-top.js.download"></script>
	<script type="text/javascript" src="./qqqq_files/easing.js.download"></script>
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
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->


<a href="file:///C:/DocsBuilder/web/gallery.html#" id="toTop" style="display: none;"><span id="toTopHover"></span><span id="toTopHover"></span><span id="toTopHover"></span>To Top</a><a href="file:///C:/DocsBuilder/web/gallery.html#" id="toTop">To Top</a><a href="file:///C:/DocsBuilder/web/gallery.html#" id="toTop">To Top</a></body></html>
<?php
}
else
{
	header("location:login.html");
}
?>