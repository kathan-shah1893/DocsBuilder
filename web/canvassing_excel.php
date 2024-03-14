<?php
session_start();
include 'conn.php';
 header("Content-type: application/vnd.ms-excel");
 header("Content-Disposition: attachment; filename=Idcard.xls" );
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
 header("Pragma: public");
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Name</th>
				<th>post</th>
				<th>address</th>
				<th>D.O.B.</th>
				<th>Phone</th>
				<th>Email</th>	
				</tr>
			</thead>
			<tbody>
<?php $candidate_query=mysqli_query($con,"SELECT  * from card where user_id=".$_SESSION['sess_uid']);
		while($rows=mysqli_fetch_array($candidate_query))
			 { ?>
<tr class="del">
	<td><?php echo $rows['name']; ?></td>
	<td><?php echo $rows['post']; ?></td>
	<td><?php echo $rows['address']; ?></td>
	<td ><?php echo $rows['DOB']; ?></td>
	<td ><?php echo $rows['phone']; ?></td>
	<td ><?php echo $rows['email']; ?></td>
	</tr>
<?php } ?>
			</tbody>
		</table>
</body>
</html>
<a href="service.php"><--Back</a>