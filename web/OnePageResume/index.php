<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <title>Resume</title>
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
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
    <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
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
    <div id="page-wrap">
        <img src= "<?php echo $k; ?>" alt="Photo of Cthulu" id="pic" width="300px" height="300px"/>
        <div id="contact-info" class="vcard">
            <!-- Microformats! -->
            <h1 class="fn"><?php echo $name ?></h1>
            <p>
                Phone: <span class="tel"><?php echo $cn; ?></span><br />
                Email: <a class="email" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
            </p>
        </div>  
        <div id="objective">
            <p>
             <?php echo $objective ?>
            </p>
        </div>
        <div class="clear"></div>
        <dl>
            <dd class="clear"></dd>
            <dt>Education</dt>
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
            <dd>
                <h2> <?php $uni ?></h2>
                <p><strong>Degree:</strong><?php echo $degree ?><br />
                    <strong>collage:</strong><?php echo $clg ?><br />
                    <strong>Univercity:</strong><?php echo $uni ?><br />
                    <strong>Passing_year:</strong><?php echo $pass_year ?><br /></p>
              <?php }
              ?>     
            </dd>
            <dd class="clear"></dd>
            <dt>Skills</dt>
            <?php for($i=0;$i<$skl;$i++) 
                   {   ?>
            <dd>
                <h2><?php echo $skill ?></h2>
                <p><?php echo $Description ?><br />
                <strong>Experience:</strong><?php echo $exprience ?></p>
            </dd>
        <?php }?>
        <dd class="clear"></dd>
            <dt>Achievemnt</dt>
   <?php
  $sql="SELECT * FROM achievement WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $ach=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
   $title=$row['title'];
   $date=$row['date'];
   $desc=$row['description'];
        echo "<dd>
                <h2> $title </h2>
                <p> $desc <br />
                <strong>Achievement Date:</strong> $date </p>
            </dd>";
  } ?>  
            <dd class="clear"></dd>
            <dt>Hobbies</dt>
           <?php
  $sql="SELECT * FROM hobbies WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $ach=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
        $ho=$row['hobbi'];
        echo "<dd><b> $ho </b></dd>";
  } 
  ?>
        </dl>
        <div class="clear"></div>
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