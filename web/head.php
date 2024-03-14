<?php
 session_start();
 if (isset($_SESSION['sess_user'])) 
 {
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 	<header>
	<div class="top-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-uppercase" href="index.php">Docs Builder <i class="fab fa-studiovinari"></i></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">Tools</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="gallery.php">Template Gallery</a>
						</li>
						<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Pages
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="changepass2.php">Change Password</a>
								</li>
								<li>
									<a href="editprofile.php">Edit Profile</a>
								</li>
								<li>
									<a href="delete.php">Delete Account</a>
								</li>
								<li>
									<a href="about.php">About</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.html"><span class="w3layouts_stats_left_span fa fa-sign-in" aria-hidden="true"></span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
</body>
</html>
<?php
 }
else
{
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<header>
	<div class="top-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-uppercase" href="index.php">Docs Builder <i class="fab fa-studiovinari"></i></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>				
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.html">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php"><span class="w3layouts_stats_left_span fa fa-sign-in" aria-hidden="true"></span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
</body>
</html>
<?php
}
?>