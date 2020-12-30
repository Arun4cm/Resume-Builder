<?php
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$linkedin= $_POST["linkedin"];
$github= $_POST["github"];
$objective= $_POST["subject1"];
$summary= $_POST["subject2"];
$sboard= $_POST["sboard"];
$sinstitution= $_POST["sinstitution"];
$syop= $_POST["syop"];
$sper= $_POST["sper"];
$iboard= $_POST["iboard"];
$iinstitution= $_POST["iinstitution"];
$iyop= $_POST["iyop"];
$iper= $_POST["iper"];
$dboard= $_POST["dboard"];
$dinstitution= $_POST["dinstitution"];
$dyop= $_POST["dyop"];
$dper= $_POST["dper"];
$skill1= $_POST["1"];
$skill2= $_POST["2"];
$skill3= $_POST["3"];
$skill4= $_POST["4"];
$skill5= $_POST["5"];
$skill6= $_POST["6"];
$projecttitle= $_POST["projecttitle"];
$duration= $_POST["duration"];
$teamsize= $_POST["teamsize"];
$projectscope= $_POST["projectscope"];
$role= $_POST["role"];
$organization= $_POST["organization"];
$duration1= $_POST["duration1"];
$teamsize1= $_POST["teamsize1"];
$projectscope1= $_POST["projectscope1"];
$role1= $_POST["role1"];
$training= $_POST["training"];
$workshop= $_POST["workshop"];
$seminars= $_POST["seminars"];
$award= $_POST["award"];
$achievement= $_POST["achievement"];
$award1= $_POST["award1"];
$achievement1= $_POST["achievement1"];
$declaration= $_POST["declaration"];
$name= $_POST["name"];
$fathername= $_POST["fathername"];
$mothername= $_POST["mothername"];
$gen= $_POST["gen"];
$nation= $_POST["nation"];
$dob= $_POST["dob"];
$add= $_POST["add"];
?>
<html lang="en">
<head>
<style>
body {
  margin: 0;
  padding: 0;
  background: #bfcfff;
  font-family: "Times New Roman", Times, serif;
}
h1 {
  margin: 0;
  font-weight: 400;
}
h2 {
  margin: 0;
  font-weight: 400;
  display: inline-block;
}
.box {
  background: #fff;
  width: 50rem;
  padding: 3rem;
  margin: 1rem auto;
  border-radius: 0.5rem;
}
.header {
  display: grid;
  grid-template-columns: 50% 50%;
}
.header-left {
  display: grid;
  justify-items: center;
  align-items: center;
  font-size: 2rem;
}
.first-name {
  font-weight: 400;
  margin: 0;
}
.last-name {
  font-weight: 200;
  margin: 0;
}
.header-right {
  width: 100%;
  display: grid;
  justify-items: end;
}
.header-right p {
  display: inline-block;
}
.grey {
  background: grey;
  color: #fff;
  padding: 0.7rem;
  border-radius: 0.3rem;
}
table {
  border: 2px solid black;
  margin: 1rem 0 1rem 0;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
td,th {
  border: 1px solid black;
  padding: 0.4rem;
    }
button.btn{
  background: transparent;
  color: navy;
  border: 3px solid navy;
  font-size: 15px;
  letter-spacing: 2px;
  padding: 25px 80px;
  text-transform: uppercase;
  cursor: pointer;
  display: inline-block;
  margin: 15px 30px;
/* animate and time the transitions*/
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}    
button.btn-1:hover{
  background-color: navy;
  color: white;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;   
      </style>
    <title>Resume</title> 
  </head>
  <body>
      <style>
          @media print{
    body * {
        visibility: hidden;
            }
        .print-container, .print-container * {
                  visibility: visible;
              }  
          }
      </style>
    <div class="box print-container">
      <div class="header"> 
        <div class="header-left">
            <h1 class="first-name"><?php echo $fname; ?></h1>
            <h1 class="last-name"><?php echo $lname; ?></h1>
        </div>
        <div class="header-right">
            <p><?php echo $email; ?></p>
            <p><?php echo $linkedin; ?></p>
            <p><?php echo $github; ?></p>
            <p>+91 <?php echo $phone; ?></p> 
        </div> 
      </div> 
      <hr />
        <div class="grey">
          <h2>Objective</h2>
        </div>
        <p>
        <?php echo $objective; ?>
        </p>
        <div class="grey">
          <h2>Education</h2>
        </div>
        <table>
          <tr>
            <th>Board</th>
            <th>Institution</th>
            <th>Year of passing</th>
            <th>Percentage/GPA</th>
          </tr>
          <tr>
            <td><?php echo $dboard; ?></td>
            <td><?php echo $dinstitution; ?></td>
            <td><?php echo $dyop; ?></td>
            <td><?php echo $dper; ?></td>
          </tr>
          <tr>
            <td><?php echo $iboard; ?></td>
            <td><?php echo $iinstitution; ?></td>
            <td><?php echo $iyop; ?></td>
            <td><?php echo $iper; ?></td>
          </tr>
          <tr>
            <td><?php echo $sboard; ?></td>
            <td><?php echo $sinstitution; ?></td>
            <td><?php echo $syop; ?></td>
            <td><?php echo $sper; ?></td>
          </tr>
        </table>
          <div class="grey">
                <h2>Skills</h2>
          </div>
        <ul>
          <li><?php echo $skill1; ?></li>
          <li><?php echo $skill2; ?></li>
          <li><?php echo $skill3; ?></li>
          <li><?php echo $skill4; ?></li>
          <li><?php echo $skill5; ?></li>
          <li><?php echo $skill6; ?></li>
        </ul>
        <div class="grey">
        <h2>Project</h2>
        </div><br>
        <p>Project Title&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $projecttitle; ?></p>
        <p>Duration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $duration; ?></p>
        <p>Team Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $teamsize; ?></p>
        <p>Project Scope&nbsp;&nbsp;:&nbsp;<?php echo $projectscope; ?></p>
 <p>Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $role; ?></p>
        <div class="grey">
                <h2>Intership</h2>
        </div><br>
        <p>Organization&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $organization; ?></p>
        <p>Duration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $duration1; ?></p>
        <p>Team Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $teamsize1; ?></p>
        <p>Project Scope&nbsp;&nbsp;:&nbsp;<?php echo $projectscope1; ?></p>
        <p>Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $role1; ?></p>
        <div class="grey">
                <h2>Training/Workshop/Seminars Attended</h2>
          </div><br>
        <p>Training&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $training; ?></p>
        <p>Workshop&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $workshop; ?></p>
        <p>Seminars&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $seminars; ?></p>
        <div class="grey">
                <h2>Achievements & Awards</h2>
          </div><br>
        <p>Award 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $award; ?></p>
        <p>Achievement 1&nbsp;:&nbsp;<?php echo $achievement; ?></p>
        <p>Award 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $award1; ?></p>
        <p>Achievement 2&nbsp;:&nbsp;<?php echo $achievement1; ?></p>
        <div class="grey">
          <h2>Extra Curricular Activities</h2>
        </div>
        <p>
          <?php echo $summary; ?>
        </p>
        <div class="grey">
          <h2>Personal Details</h2>
        </div><br><P>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $name; ?></P>
        <P>Father's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $fathername; ?></P>
        <P>Mother'sName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $mothername; ?></P>
        <P>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $gen; ?></P>
        <P>Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $nation; ?></P>
        <P>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $dob; ?></P>
        <P>Address for Communication&nbsp;:&nbsp;<?php echo $add; ?></P>
        <div class="grey">
          <h2>Declaration</h2>
        </div>
        <P><?php echo $declaration; ?></P>
    </div> 
<center>
          <button class="btn btn-1" onclick="history.back()">EDIT</button>
          <button class="btn btn-1" onclick="window.print();">Print as PDF..</button>
</center>
</body>
</html>