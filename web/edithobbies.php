<!DOCTYPE html>
<html lang="en">
<head>
<title>Docs Builder | Edit Hobbies</title>
	
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
						<h3 class="tittle-w3"><span>CV Hobbies Details</span></h3>
						 <table border="3">
                                <tr>
                                    <th>Hobbies ID  </th>
                   		            <th>Hobbies  </th>
                                    <th>Action  </th>
                                </tr>
            					<tbody><b>
									<?php 
									$suid=$_SESSION['sess_uid'];
									$sql="SELECT * FROM hobbies WHERE user_id=".$_SESSION['sess_uid'];
									$res=mysqli_query($con,$sql);
									$count=mysqli_num_rows($res);
									if($count==0)
									{
										echo "<script> alert('sorry data are not found');</script>";
									}
									else
									{
									while($row=$res->fetch_assoc())
									{
												echo "<tr>";
												echo "<td>".$row['hobbi_id']."</td>";
												echo "<td>".$row['hobbi']."</td>";?>
												<td><a href='?del=<?php echo $row['hobbi_id']; ?>' onclick="return confirm('Are You Sure?');">DELETE</a>
													<!-- <a href="editcv2.php?e_Id=<?php echo $row['hobbi_id']; ?>">EDIT</a> -->
												</td>
												<?php
												  $k=$row['hobbi_id'];
												?>
											</tr>
									<?php

									}
									 if(isset($_GET['del']))
									    {
                    					  $querya="DELETE FROM hobbies WHERE hobbi_id=".$_GET['del']."";
                    					  $resulta= mysqli_query($con,$querya);
					                      if($resulta)
					                      {
                 						 	if (!isset($_GET['reload'])) 
										 	{
                    					       echo '<meta http-equiv=Refresh content="0;url=edithobbies.php?reload=1">';
                        					}
                    					  }
                						}
                					}	
									?>		
										</b></tbody>
                                    </table>
                                  	<a href="contact.php" class="ab">Need Help?</a><br/><a href="services.php" class="ab"><--Back</a></form><br/>
<!--                                      <a href="edithobbies.php">Refress</a><br>
                                     <a href="hobbies.php">ADD</a><br> -->
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