<?php
$username=$_POST['username'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$sex="M";
$mobile=$_POST['mobile'];
$year=$_POST['year'];
$college=$_POST['college'];
$dept=$_POST['dept'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$roll=$_POST['roll'];
$con=mysqli_connect("localhost","root","amol","project");
if(!$con)
{die("Connection failed");}
else {
	//echo "Connected";
$query="select * from userentry where username='$username'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$num_rows=mysqli_num_rows($result);
if($num_rows>0) {echo "UserName already Taken. Please choose a new one";exit();}
if($pass!=$repass)
	echo "Passwords do not match, Fill Again";
else
   if($username=='')
   	echo "Username is blank, Fill Again";
else
	if($pass=='' || $repass=='')
		echo "Password missing. Enter again";
	else
	 if($email=='')
	 	echo "E-mail id missing. Enter again";
	else
	 if($first_name=='' || $last_name=='')
	 	echo "Name missing. Enter again";
	else
	 	if($college=='')
			echo "college missing. Fill again";
		else
			if($roll=='')
				echo "roll missing. Fill again";
			else
				if($mobile=='')
					echo "Mobile missing. Fill again";
				else {
	
$query1="insert into userentry (username,password,first_name,last_name,sex,college,roll,dept,year,mobile) values ('$username',sha1('$pass'),'$first_name','$last_name','$sex','$college','$roll','$dept','$year','$mobile');";
$result=mysqli_query($con,$query1);
if ($result) 
 	echo "Registered Sucessfully.. Please Login to Continue";
else 
	echo "Fill again";

$re1=mysqli_query($con,"select * from userentry where username='$username'");
$row=mysqli_fetch_array($re1);
$id=$row['id'];
$query2="insert into login(id,username,password,type) values ('$id','$username',sha1('$pass'),'norm');";
$result=mysqli_query($con,$query2);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="index.php">Click Here to Login</a>
</body>
</html>
<?
}
}
?>
