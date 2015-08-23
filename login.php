<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><center>
<?php
session_start();
if (isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['pass'];
		$con=mysqli_connect("localhost","root","amol","login");
		//$con=mysqli_connect("localhost","root","amol","notice_board");
		if(!$con)
			die("Unable");
		$query="select * from login where username='$username' and password='$password';";
		echo $query;
		$result=mysqli_query($con,$query);
		//if(!$result) echo "failed";
		$num_rows=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		
		if ($num_rows>0 || $row['id']=='')
			{
				$_SESSION['login']=1;
				$_SESSION['username']=$row['username'];
				$_SESSION['password']=$row['password'];
				$_SESSION['type']=$row['type'];
				echo $_SESSION['login'];
				echo $_SESSION['username'];
				echo $_SESSION['password'];
				echo $_SESSION['type'];
				/*
				if($row['type']=="norm")
					{
						header("Location:index.php");
					}
				else
					{
						header("Location:admin.php");
					}*/
			}
		else
		 {
             echo "<br><b>Login Failed(Invalid Username/Password)</b>"; 	
			session_destroy();
			
		 }
		
		
	}
?>
</center>
</body>
</html>
