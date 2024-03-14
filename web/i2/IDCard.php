<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="IDCard.css">
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
    <title>ID Card</title>   
</head>
<body style="background-color:powderblue;">
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
    <div class="container">
        <div class="padding">
        <div class="font">
            <div class="companyname"><br><span class="tab"><?php echo $cname ?></span></div>
            <div class="top">
            <?php 
               echo "<img src=../Profile/".$profile; ?>
            </div>
            <div class="">
                <div class="ename">
                <p class="p1"><b><?php echo $name ?></b></p>
                <p><?php echo $post ?></p>
                </div>
                <div class="edetails">
                    <P><b>Mobile No :</b> <?php echo $ph ?></P>
                    <p><b>DOB :</b> <?php echo $DOB ?></p>
                    <p><b>Email :</b> <?php echo $mail ?></p>
             <div class="Address"><b>Address : </b><?php echo $add ?></div>
                </div>
                <div class="signature">
                   <?php 
                  //echo "<img src=../Profile/".$logo.">"; ?>
                     <!-- <b>Signature</b> -->
                </div>
            </div>
         <div class="barcode" style="width: 150%; height: 150%;">
                </div>
                <div class="qr">
           <?php 
                      echo "<img src=../Profile/".$logo.">"; ?>
                </div>
            </div>
        </div>
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