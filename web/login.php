<?php
	include 'conn.php';
	if(isset($_POST['clk'])){
		$uemail=$_POST['uname'];
		$upass=$_POST['pass'];
		$query=("SELECT * FROM user WHERE email='".$uemail."' AND password='".$upass."'");
		$run=mysqli_query($con,$query);
		$count=mysqli_num_rows($run);
		if($count==1)
		{
			session_start();
			$_SESSION['sess_user']=$uemail;
			$query2=("SELECT user_id FROM user WHERE email='".$uemail."'");
			$run2=mysqli_query($con,$query);
			if($run2)
			{
			  while($value= mysqli_fetch_array($run2))
			  {
       			$_SESSION['sess_uid']=$value['user_id'];
       			echo $_SESSION['sess_uid'];
        	  }
			header("Location:index2.php");				
			}
			else
			{
				echo "<script> alert('someting want wrong');</script>";
			}
		}
		else
		{
			echo "<script>alert('SORRY YOU ENTER WRONG USER NAME AND PASSWORD');</script>";
					 	if (!isset($_GET['reload'])) 
					 	{
                           echo '<meta http-equiv=Refresh content="0;url=login.html">';
                        }
			//header("Location:login.html");
		}
	}
?> 