<?php
include 'conn.php'; 
session_start();
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
  $sql="SELECT * FROM education WHERE u_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $edu=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
   $degree=$row['degree'];
   $uni=$row['univercity'];
   $clg=$row['collage'];
   $pass_year=$row['passing_year'];
  }
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=docbuilder.doc");
?>
<html>
<body>
<div id='header'>
<p id='name'><?php echo $name; ?></p>
         <a href='mailto:deepsukhwani@gmail.com' target='_blank'><p id='email'><?php echo $email; ?></p></a>
     </div>
     <div class='left'>
     </div>
     <div class='right'>
            <h3>CV Highlights</h3>
            <p>
            <ul>
                <li><?php echo $objective?></li>
                <!-- <li>Learnt basic Python, JavaScript, HTML, CSS on Codecademy.com.</li>
                <li>An independent, dedicated, efficient person. These attributes are proved through the series of courses I have taken or I am taking as of now independently through online platforms.</li>
                <li>Good Communication Skills, Presentation Skills, attitude towards leadership, authorisation and delegation, conflict resolution and negotiation and a very good team worker.</li> --></ul>
            </p>
            <h3>Professional Experience</h3>
            <h4 id='company-name'>Wingify Software Pvt Ltd</h4>
            <p id='job-title'><strong>Support Engineer (Technical Support)</strong></p>
            <p id='job-responsibilities'>Job Responsbilities</p>
            <p>
            <ul>
                <li>Answer customer queries over email / ticketing system</li>
                <li>Interact with our engineering team to get software issues and bugs resolved</li>
                <li>Occasionally interact with customers over Skype or telephone</li>
                <li>Contribute ideas to the team on how customers can be delighted</li></ul>
            </p>
            <h3>Educational Qualifications</h3>
            <table border='1'>
                <tr>
                    <th>Degreee</th>
                    <th>Univercity</th>
                   <th>collage</th>
                    <th>passing year</th>
                </tr>
                   <?php for($i=0;$i<$edu;$i++) 
                   {   ?>
                <tr id='heading'>
                    <td><?php echo $degree; ?></td>
                    <td><?php echo $uni; ?></td>
                    <td><?php echo $clg; ?></td>
                    <td><?php echo $pass_year;?></td>
                <?php } ?> 
                </tr>
                <!-- <tr>
                    <td>H.S.C (Science Stream)</td>
                    <td>G.S.E.B India</td>
                    <td>72.40%</td>
                    <td>2006</td>
                </tr>
                <tr>
                    <td>GDCA (Grad. Dipl in Computer Applications)</td>
                    <td>NIE (National Institute Of Engineering), Mumbai, India</td>
                    <td>A Grade</td>
                    <td>2008</td>
                </tr>
                <tr>
                    <td>B.Sc. (Hons) - Applied Accounting</td>
                    <td>Oxford Brookes University</td>
                    <td>2:1 – Upper Second Class Honours</td>
                    <td>2012</td>
                </tr>
                <tr>
                    <td>Chartered Accounting - ACCA</td>
                    <td>ACCA Glasgow, UK</td>
                    <td>Passed (1st Attempt)</td>
                    <td>2013</td>
                </tr>
 -->            </table>
<!-- 
'' -->
            <h3>Technical Skills</h3>
            <p>
                  <?php for($i=0;$i<$skl;$i++) 
                   {   ?>
            <ul>
                <li>
                <span id='course-name'><?php echo $skill; ?></span><br><?php echo $Description; ?></li>
                <li>
                <?php } ?>    
<!--                 <span id='course-name'>Application Software:</span> Office 97-2003; Office XP, Office 2007, Office for Mac 2011, iWork ’09, Sage Accounting Software, Sage 50 (Accounting Software), Excel 2003/2007 for Financial Modelling spreadsheets.</li>
                <li>
                <span id='course-name'>Programming Skills:</span>HTML, CSS, Python, JavaScript, learning C and C++</li></ul> -->
            </p>
                        <h3>Certifications / Achievement:</h3>
            <p>
            <ul>
 <?php
  $sql="SELECT * FROM achievement WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $ach=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
   $title=$row['title'];
   $date=$row['date'];
   $desc=$row['description'];
        echo "
                <h2> $title </h2>
            <li>$desc <br/> <strong>Achievement Date:</strong> $date </p> </li>";
  } ?>
  <!--               <li>Interviewed by ACCA for “international ACCA student in UK”, interview published in January 2012 edition of ACCA Student Accountant Magazine.</li>
                <li>Interviewed by ACCA for “international ACCA student in UK”, interview published in January 2012 edition of ACCA Student Accountant Magazine.</li> --></ul>
            </p>
            <h3>Personal Information:</h3>
            <p>
            <ul>
                <li>
                Address:- <?php echo $add; ?>
                <li>
                <span id='course-name'>Email</span><?php echo $email;?></li>
                <li>
                <span id='course-name'>Hobbies:</span>
 <?PHP          
  $sql="SELECT * FROM hobbies WHERE user_id=".$_SESSION['sess_uid'];
  $res=mysqli_query($con,$sql);
  $ach=mysqli_affected_rows($con);
  while($row=$res->fetch_assoc())
  {
        $ho=$row['hobbi'];
        echo "<b> $ho </b>";
  } 
  ?></li> </ul>
            </p>
            <h3>Other Information</h3>
            <p>
            <ul>
                <li>
                <span id='course-name'>Expected Salary:</span>As per company standards</li>
                <li>
                <span id='course-name'>Area of Interest:</span>Software Development, Programming, Start-ups, Coding, App Development, Technical Support, Support Engineer, Customer Happiness, Client service, Investment Banking, Corporate Finance, Hedge Funds, Mergers & Acquisitions, Analyst, Equity Research, Business Analysis</li>
                <li>
                <span id='course-name'>Joining Date:</span>Immediate</li></ul>
            </p>
            <h3>Declaration</h3>
            <p>
            I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
     </div>
     <div id='footer'></div>
    </body>
</html>