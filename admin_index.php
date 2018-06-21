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


$result=mysql_query("SELECT * FROM admin WHERE adminid = '$_SESSION[adminid]' AND pass = '$_SESSION[pass]'");
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
	 
 </tr>
</thead>
<?php
while($array = mysql_fetch_assoc($result))
{
	print "<tr> <td>";
    echo $array['fullname'];
	print "</td> <td>";
    echo $array['adminid'];
	print "</td> <td>";
    echo $array['email'];
    print "</td> <td>";
    echo $array['phonenumber'];
    print "</td> <td>";
    echo $array['address'];
	
	print "</td> </tr>";
	
}	
?>
</table><br>
    <center><h1>ADD:</h1></center><br>
    <div class="navigation">
        <ul>
       <center> <li><a href="student_signup.html">STUDENT</a></li>
        <li><a href="teacher_signup.html">TEACHER</a></li>
 
           </ul>
    </div>
    
    </body>
</html>