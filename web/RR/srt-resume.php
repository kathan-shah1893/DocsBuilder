<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>Jonathan Doe | Web Designer, Director | name@yourdomain.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />
<style type="text/css">
	        @page {
  size: A4;
  margin: 0;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
}
</style>
</head>
<body>
<?php
session_start();
  include 'conn.php';
  $suid=$_SESSION['sess_uid'];
  $sql="SELECT * FROM resume_data WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $skl=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
   $skill=$row['Skill'];
   $exprience=$row['Skill_exprience'];
   $Description=$row['Description'];
   $objective=$row['objective'];
  }
$sql="SELECT * FROM user WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  while($row=$res->fetch_assoc())
  {
   $name=$row['name'];
   $city=$row['city'];
   $gender=$row['gender'];
   $email=$row['email'];
   $cn=$row['contact'];
   $pin=$row['pincode'];
   $add=$row['Address'];
   $state=$row['state'];
   $k=$row['image'];
  }
?>
<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $name ?></h1>
					<h2></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
<!-- 						<h3><a id="pdf" href="#">Download PDF</a></h3> -->
						<h3><?php echo $email ?></h3>
						<h3><?php echo $cn ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
						<?php echo $objective ?>
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">
              <?php for($i=0;$i<$skl;$i++) 
                   {   ?>

								<div class="talent">
									<h2><?php echo $skill ?></h2>
                					<p><?php echo $Description ?><br />
					                <strong>Experience:</strong><?php echo $exprience ?></p>
								</div>
			<?php } ?>
<!-- 
								<div class="talent">
									<h2>Interface Design</h2>
									<p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p>
								</div>

								<div class="talent">
									<h2>Project Direction</h2>
									<p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
								</div> -->
						</div>
					</div><!--// .yui-gf -->
<!-- 
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Achievemnt</h2>
						</div>
						<div class="yui-u">
								<li>XHTML</li>
								<li>CSS</li>
								<li class="last">Javascript</li>
							</ul>

							<ul class="talent">
								<li>Jquery</li>
								<li>PHP</li>
								<li class="last">CVS / Subversion</li>
							</ul>

							<ul class="talent">
								<li>OS X</li>
								<li>Windows XP/Vista</li>
								<li class="last">Linux</li>
							</ul>
						</div>
					</div> --><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Education</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
<?php
             $sql="SELECT * FROM education WHERE u_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $edu=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
   $degree=$row['degree'];
   $uni=$row['univercity'];
   $clg=$row['collage'];
   $pass_year=$row['passing_year'];
 ?>
							<div class="job">
								<h2><?php echo $degree ?></h2>
								<h3><?php echo $uni ?></h3>
								<h4><?php echo $pass_year ?></h4>
								<p><?php echo $clg ?></p>
	           <?php }
              ?>						</div>

<!-- 							<div class="job">
								<h2>Apple Inc.</h2>
								<h3>Senior Interface Designer</h3>
								<h4>2005-2007</h4>
								<p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
							</div>

							<div class="job">
								<h2>Microsoft</h2>
								<h3>Principal and Creative Lead</h3>
								<h4>2004-2005</h4>
								<p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
							</div>


							<div class="job last">
								<h2>International Business Machines (IBM)</h2>
								<h3>Lead Web Designer</h3>
								<h4>2001-2004</h4>
								<p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
							</div> -->

<!-- 						</div> --><!--// .yui-u -->
<!--					</div>// .yui-gf -->
<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Achievement</h2>
						</div>
			<?php
  $sql="SELECT * FROM achievement WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $ach=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
   $title=$row['title'];
   $date=$row['date'];
   $desc=$row['description'];
   ?> 

						<div class="yui-u">
							<h2><?php echo $title ?></h2>
							<h3><strong>Date of achievement:-</strong><?php echo $date ?></h3>
							<p><?php echo $desc ?></p>
						</div>
						<?php 
  } 
  ?>
					</div>
<!-- main -->
					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>HObbies</h2>
						</div>
						<?php
  $sql="SELECT * FROM hobbies WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $ach=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
        $ho=$row['hobbi'];
  ?>

						<div class="yui-u">
							<h2><?php echo $ho ?></h2>
							</div>
						<?php 
  } 
  ?>
					</div><!--// .yui-gf -->
				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->
		<div id="ft">
			<p><h3>Declaration</h3><br>
I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
		</div><!--// footer -->
	</div><!-- // inner -->
</div><!--// doc -->
<button type="button" id="btnprint" onclick="Print();">Print</button>
    <script type="text/javascript">
        function Print() {
            document.getElementById('btnprint').style.visibility = 'hidden';
            window.print();
            document.getElementById('btnprint').style.visibility = 'visible';
        }
    </script>
</body>
</html>