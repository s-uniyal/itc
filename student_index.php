<?php 
if(!isset($_SERVER['HTTP_REFERER']))
{
    header('location:login.html');
    exit;
}
include 'connect.php';
?>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="feedback.css">
<script>
function logout()
{
	location = 'logout.php';
}
</script>

</head>
<body bgcolor="grey">
    <?php


$result=mysql_query("SELECT * FROM student WHERE rollno = '$_SESSION[rollno]' AND pass = '$_SESSION[pass]'");
?>
    <button type="button" style="float :right;" onclick='logout();' >SignOut</button>
    

    <table border="5px" width="700px" height="150px" style= "background-color:black; color:white; margin: 0 auto; opacity:0.5; text-align:center;" >
<thead>
 <tr>
      <th>Fullname</th>
	  <th>Admin-Id</th>
	  <th>Email</th>
	  <th>Phone No.</th>
	  <th>Address</th>
	  <th>Course</th>
	 
 </tr>
</thead>
<?php
while($array = mysql_fetch_assoc($result))
{
	print "<tr> <td>";
    echo $array['fullname'];
    $_SESSION['student']=$array['fullname'];
	print "</td> <td>";
    echo $array['rollno'];
	print "</td> <td>";
    echo $array['email'];
    print "</td> <td>";
    echo $array['phonenumber'];
    print "</td> <td>";
    echo $array['address'];
     print "</td> <td>";
    echo $array['course'];
	
	print "</td> </tr>";
	
}	
?>
</table><br>
    <h1>FEEDBACK FORM</h1><br>
    <h2>ENTER TEACHER's FULLNAME</h2><form method="post" action="student_index.php">
    <input type="text" name="tname" placeholder="IN CAPITAL">
    <input type="submit" name="tsubmit" value="Search">
    </form>
     <?php

if(!empty($_REQUEST['tname'])){
$result=mysql_query("SELECT * FROM teacher WHERE fullname = '$_REQUEST[tname]' ");
}
   
?>

    

    <table border="5px" width="700px" height="150px" style= "background-color:black; color:white; margin: 0 auto; opacity:0.5; text-align:center;" >
<thead>
 <tr>
      <th>Fullname</th>
	 
	  <th>Email</th>
	  
	 
	  <th>Course</th>
	 
 </tr>
</thead>
<?php
while($array = mysql_fetch_assoc($result))
{
	print "<tr> <td>";
    echo $array['fullname'];
    $_SESSION['tname']=$array['fullname'];
	print "</td> <td>";
 
    echo $array['email'];
    print "</td> <td>";
  
    echo $array['course'];
	
	print "</td> </tr>";
	
}	
?>
</table><br>
    <center><form action="connect.php" method="post">
        <input type="submit" name="feedback" value="Continue">
        </form> </center>
    
    
    </body>
</html>