<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>
        Identity Card Design
        | HTML and CSS Code
    </title>
<style type="text/css">
    body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding-top: 50px;
}

.card {
    box-shadow: 0 5px 5px 5px #e1e1e1;
    max-width: 350px;
    padding: 15px;
    border-radius: 5px;
    margin: auto;
    text-align: center;
}

img {
    width: 50%;
    border: 5px solid #e1e1e1;
    border-radius: 50%;
}

.social {
    margin: 15px 0;
}

a {
    font-size: 26px;
    padding: 7px 12px;
    text-decoration: none;
    color: #585858;
    border: 1px solid #e1e1e1;
    border-radius: 10px;
}

a:hover {
    background-color: #585858;
    color: #ffffff;
}
table, table tr td {
    width: 290px;
    margin: 0 auto;
    border: 1px solid #e1e1e1;
    text-align: left;
}
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
    $sql = "SELECT * FROM card WHERE user_id=".$_SESSION['sess_uid'];
    $res=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($res))
  {
   $cname=$row['C_name'];
   $name=$row['name'];
   $post=$row['post'];
   $add=$row['address'];
   $ph=$row['phone'];
   $logo=$row['logo'];
   $DOB=$row['DOB'];
   $profile=$row['profile'];
   $mail=$row['email'];
  }
?> 
    <div class="card">
        <?php 
               echo "<img src=../Profile/".$profile; ?>
         <img src="" alt="image" />
        <h1><?php echo $cname ?></h1>
 
        <table>
            <tr>
                <td><strong>Employee Name</strong></td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                <td><?php echo $add ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td><?php echo $mail ?></td>
            </tr>
            <tr>
                <td><strong>Designation</strong></td>
                <td><?php echo $post ?></td>
            </tr>
            <tr>
                <td><strong>Contact</strong></td>
                <td><?php echo $ph?></td>
            </tr>
        </table><br>
<b>Signature:-</b>     
        <div>
            <?php 
                      echo "<img src=../Profile/".$logo." height=50 width=10>"; ?>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-pinterest"></i>
        </div>
    </div>
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