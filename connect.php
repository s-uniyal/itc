<?php 
session_start();

if($_SESSION['status']!="active")
{
    header("location:login.html");
   // echo"<script>window.alert('You must login first');</script>";
}
$_SESSION['status']="active";

define('DB_HOST', 'localhost');
define('DB_NAME', 'feedback');
define('DB_USER','root');
define('DB_PASSWORD','');

//print_r($_POST);
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/

function SignInstudent()
{
	
 
   //starting the session for user profile page
if(!empty($_POST['rollno']))   
{
	//echo "working";
	$query = mysql_query("SELECT * FROM student where rollno = '$_POST[rollno]' AND pass = '$_POST[pass]'") ;
	//echo $query;
	
	//or die(mysql_error());
	$row = mysql_fetch_array($query);// or die(mysql_error());
	//echo"<br><br>";
	//print_r($row);
	//echo"<br><br>";
   
	if(!empty($row['rollno']) && !empty($row['pass']))
	{   
		$_SESSION['rollno'] = $row['rollno'];
        $_SESSION['pass'] = $row['pass'];	
		
		
		echo "<script>location='student_index.php';</script>";
		

	}
	else
	{
		  echo "<script>window.alert('wrong username or password');</script>";
      echo "<script>location='Sign_In.html';</script>";
	}
}
}
function SignInteacher()
{
	
 
   //starting the session for user profile page
if(!empty($_POST['rollno']))   
{
	//echo "working";
	$query = mysql_query("SELECT * FROM teacher where rollno = '$_POST[rollno]' AND pass = '$_POST[pass]'") ;
	//echo $query;
	
	//or die(mysql_error());
	$row = mysql_fetch_array($query);// or die(mysql_error());
	//echo"<br><br>";
	//print_r($row);
	//echo"<br><br>";
   
	if(!empty($row['rollno']) && !empty($row['pass']))
	{   
		$_SESSION['rollno'] = $row['rollno'];
        $_SESSION['pass'] = $row['pass'];	
		
		
		echo "<script>location='teacher_index.php';</script>";
		

	}
	else
	{
		  echo "<script>window.alert('wrong username or password');</script>";
      echo "<script>location='Sign_In.html';</script>";
	}
}
}

function SignInadmin()
{
	
 
   //starting the session for user profile page
if(!empty($_POST['rollno']))   
{
	//echo "working";
	$query = mysql_query("SELECT * FROM admin where adminid = '$_POST[rollno]' AND pass = '$_POST[pass]'") ;
	//echo $query;
	
	//or die(mysql_error());
	$row = mysql_fetch_array($query);// or die(mysql_error());
	//echo"<br><br>";
	//print_r($row);
	//echo"<br><br>";
   
	if(!empty($row['adminid']) && !empty($row['pass']))
	{   
		$_SESSION['adminid'] = $row['adminid'];
        $_SESSION['pass'] = $row['pass'];	
		
		
		echo "<script>location='admin_index.php';</script>";
		

	}
	else
	{
		  echo "<script>window.alert('wrong username or password');</script>";
      echo "<script>location='Sign_In.html';</script>";
	}
}
}
function NewUserstudent()
                 {
					 
					 echo "working 3";
                    $fullname = $_POST['fullname'];
					$rollno = $_POST['rollno'];
					$email = $_POST['email'];
					$password = $_POST['pass'];
                    $phonenumber=$_POST['phonenumber'];
                    $course=$_POST['course'];
                    $address=$_POST['address'];
					$query = "INSERT INTO student(fullname,rollno,email,pass,address,phonenumber,course) VALUES ('$fullname','$rollno','$email','$password','$address','$phonenumber','$course')";
					
					$data = mysql_query($query) or die(mysql_error());
					if($data)
					{
						echo "<script>window.alert('YOUR REGISTRATION IS COMPLETE!');
                        location='student_signup.html';
                        </script>";
					}
                 }
function NewUserteacher()
                 {
					 
					 echo "working 3";
                    $fullname = $_POST['fullname'];
					$rollno = $_POST['rollno'];
					$email = $_POST['email'];
					$password = $_POST['pass'];
                    $phonenumber=$_POST['phonenumber'];
                    $course=$_POST['course'];
                    $address=$_POST['address'];
					$query = "INSERT INTO teacher(fullname,rollno,email,pass,address,phonenumber,course) VALUES ('$fullname','$rollno','$email','$password','$address','$phonenumber','$course')";
					
					$data = mysql_query($query) or die(mysql_error());
					if($data)
					{
						echo "<script>window.alert('YOUR REGISTRATION IS COMPLETE!');
                        location='teacher_signup.html';
                        </script>";
					}
                 }

function NewUseradmin()
                 {
					 
					 echo "working 3";
                    $fullname = $_POST['fullname'];
					$adminid = $_POST['adminid'];
					$email = $_POST['email'];
					$password = $_POST['pass'];
                    $phonenumber=$_POST['phonenumber'];
                   
                    $address=$_POST['address'];
					$query = "INSERT INTO admin(fullname,adminid,email,pass,address,phonenumber) VALUES ('$fullname','$adminid','$email','$password','$address','$phonenumber')";
					
					$data = mysql_query($query) or die(mysql_error());
					if($data)
					{
						echo "<script>window.alert('YOUR REGISTRATION IS COMPLETE!');
                        location='admin_signup.html';
                        </script>";
					}
                 }
function SignUpstudent()
{
	print_r($_POST);
	echo "<br>working 2";
if(!empty($_POST['rollno']))
{
	$query = mysql_query("SELECT * FROM student WHERE rollno = '$_POST[rollno]' AND pass = '$_POST[pass]'") or die(mysql_error());
    $query1 = mysql_query("SELECT rollno FROM student WHERE rollno = '$_POST[rollno]'") or die(mysql_error());
     if($row1= mysql_fetch_array($query1))
    {
         echo "<script>window.alert('roll no exist');</script>";
    echo "<script>location='student_signup.html';</script>";
    }
	echo $query;
	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUserstudent();
	}
	else
	{
	   echo "<script>window.alert('Already registered!');</script>";
    echo "<script>location='student_signup.html';</script>";
    }
   
		
}
    
}
function SignUpteacher()
{
	print_r($_POST);
	echo "<br>working 2";
if(!empty($_POST['rollno']))
{
	$query = mysql_query("SELECT * FROM teacher WHERE rollno = '$_POST[rollno]' AND pass = '$_POST[pass]'") or die(mysql_error());
    $query1 = mysql_query("SELECT rollno FROM teacher WHERE rollno = '$_POST[rollno]'") or die(mysql_error());
     if($row1= mysql_fetch_array($query1))
    {
         echo "<script>window.alert('roll no exist');</script>";
    echo "<script>location='teacher_signup.html';</script>";
    }
	echo $query;
	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUserteacher();
	}
	else
	{
	   echo "<script>window.alert('Already registered!');</script>";
    echo "<script>location='teacher_signup.html';</script>";
    }
   
		
}
    
}

function SignUpadmin()
{
	print_r($_POST);
	echo "<br>working 2";
if(!empty($_POST['adminid']))
{
	$query = mysql_query("SELECT * FROM admin WHERE adminid = '$_POST[adminid]' AND pass = '$_POST[pass]'") or die(mysql_error());
    $query1 = mysql_query("SELECT adminid FROM admin WHERE adminid = '$_POST[adminid]'") or die(mysql_error());
     if($row1= mysql_fetch_array($query1))
    {
         echo "<script>window.alert('roll no exist');</script>";
    echo "<script>location='admin_signup.html';</script>";
    }
	echo $query;
	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUseradmin();
	}
	else
	{
	  echo "<script>window.alert('Already registered!');</script>";
    echo "<script>location='admin_signup.html';</script>";
    }
   
		
}
    
}
function feedback()
{   $query1=mysql_query("SELECT fullname FROM feedback WHERE fullname='$_SESSION[tname]'AND sname='$_SESSION[student]'")or die(mysql_error());;
  $query2=mysql_query("SELECT fullname FROM feedback WHERE fullname='$_SESSION[tname]' AND sname='$_SESSION[student]'")or die(mysql_error());;
  if($row1=mysql_fetch_array($query2)){
     echo "<script>window.alert('feedback exist');</script>";
  echo "<script>location='student_index.php';</script>";
  }
 if(!$row=mysql_fetch_array($query1)or die(mysql_error()))
 {
    $tname=$_SESSION['tname'];
     $sname=$_SESSION['student'];
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
    $q7=$_POST['q7'];
    $q8=$_POST['q8'];
    $rate=$_POST['rate'];
    $comment=$_POST['comment'];
    $query=mysql_query("INSERT INTO feedback(fullname,sname,q1,q2,q3,q4,q5,q6,q7,q8,rating,comment) VALUES ('$tname','$sname','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$rate','$comment')");
     echo "<script>window.alert('feedback sent');</script>";
  echo "<script>location='student_index.php';</script>"; 
 }

}

if(isset($_POST['submit']))
{
    SignUpstudent();
}
if(isset($_POST['submits']))
{
    if($_POST['person']=='student')
        SignInstudent();
    if($_POST['person']=='teacher')
         SignInteacher();
    if($_POST['person']=='admin')
         SignInadmin();
    
}
if(isset($_POST['submitt']))
{
     SignUpteacher();
}
if(isset($_POST['submita']))
{
    SignUpadmin();
}
if(isset($_POST['fsubmit']))
{
    feedback();
}
if(isset($_POST['feedback']))
{
     $query2=mysql_query("SELECT fullname FROM feedback WHERE fullname='$_SESSION[tname]' AND sname='$_SESSION[student]'")or die(mysql_error());;
  if($row1=mysql_fetch_array($query2)){
     echo "<script>window.alert('feedback exist');</script>";
  echo "<script>location='student_index.php';</script>";
}
    else
    {
        echo "<script>location='feedback.php';</script>";
    }
}

?>