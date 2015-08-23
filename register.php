<?php
session_start();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="form.css" rel="stylesheet" />
<link href="table1.css" rel="stylesheet" />
<link href="menu.css" rel="stylesheet" />
<script src="menu.js" type="text/javascript"></script>
<script type="text/javascript" src="validate_form.js>
function validateForm()
{
var college=document.forms["form"]["college"].value;
var roll=document.forms["form"]["roll"].value;
var x=document.forms["form"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
   //form.username.focus();
  return false;
  }
var pass=document.forms["form"]["pass"].value;
var repass=document.forms["form"]["repass"].value;
//alert("l");
if (pass==null || repass=="")
  {
  alert("One of the Passwords field is empty");
   //form.username.focus();
  return false;
  }
if(pass!=repass)
	{
		alert("Passwords do not match");
		return false;
	}

var email=document.forms["form"]["email"].value;
var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (atpos<1 || dotpos< atpos+2 || dotpos+2>=email.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var first_name=document.forms["form"]["first_name"].value;
var last_name=document.forms["form"]["last_name"].value;
if (first_name==null || first_name=="" || last_name==null || last_name=="")
  {
  alert("Name field empty");
   //form.username.focus();
  return false;
  }
  if(isNotAlphabets(first_name))
	{
		alert("The first name field contains invalid characters or spaces.\n Please re-enter your last name again.");
	//	frm.txtLname.focus();
		return false;
	}
if(isNotAlphabets(last_name))
	{
		alert("The last name field contains invalid characters or spaces.\n Please re-enter your last name again.");
	//	frm.txtLname.focus();
		return false;
	}
//alert("p");
var college=document.forms["form"]["college"].value;
var roll=document.forms["form"]["roll"].value;

if (college==null || college=="")
  {
  alert("Please enter your college name");
   //form.username.focus();
  return false;
  }
if (roll==null || roll=="")
  {
  alert("please enter your roll");
   //form.username.focus();
  return false;
  }
var mobile= documents.forms["form"]["mobile"].value;
if(documents.forms["form"]["mobile"].value.length==0 || !isNotAlphabets(mobile) || documents.forms["form"]["mobile"].value.length != 10 )
   		{ 
     		alert("Invalid Mobile number... ");
     		return false;
      	}
}

</script>
<style type="text/css">
</style>
</head>
<div id="stylized" class="myform">
<form action="register.php" method="POST" enctype="application/x-www-form-urlencoded" name="form" onSubmit="return validateForm();">
<h1>Sign-up form</h1>
<p>Please Fill this form to register</p>

<label>UserName
<span class="small">Your unique username</span>
</label>
<input type="text" name="username" id="name" />

<label>Email
<span class="small">Add a valid address</span>
</label>
<input type="text" name="email" id="email" />

<label>Password
<span class="small">Min. size 6 chars</span>
</label>
<input type="password" name="pass" id="password" />

<label>Confirm Password
<span class="small">should be same</span>
</label>
<input type="password" name="repass" id="password" />
<br /><br />

<label>First Name
<span class="small">Your First Name</span>
</label>
<input type="text" name="first_name" id="name" />

<label>Last Name
<span class="small">Your Last Name</span>
</label>
<input type="text" name="last_name" id="name" />

<label>College
<span class="small">Present College</span>
</label>
<input type="text" name="college" id="name" />

<label>Year
<span class="small">Year</span>
</label>
<input type="text" name="year" id="name" />

<label>Roll
<span class="small">Roll No</span>
</label>
<input type="text" name="roll" id="name" />

<label>Department
<span class="small">Your Branch</span>
</label><input type="text" name="dept" id="name" />

<label>Mobile
<span class="small">Mobile</span>
</label>
<input type="text" name="mobile" id="name" />

<input name="reg_page" value="true" type="hidden">
<button type="reset" value="Reset">Reset</button><br /> <br />
<button type="submit" name="s1">Sign-up</button>

<div class="spacer"></div>

</form>
</div>
<?
if(isset($_POST['s1']))
	{
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
if($num_rows>0) {echo '<div class="errormsgbox">UserName already Taken. Please choose a new one </div>';exit();}
if($pass!=$repass)
	echo '<div class="errormsgbox">Passwords do not match, Fill Again</div>';
else
   if($username=='')
   	echo '<div class="errormsgbox">Username is blank, Fill Again</div>';
else
	if($pass=='' || $repass=='')
		echo '<div class="errormsgbox">Password missing. Enter again</div>';
	else
	 if($email=='')
	 	echo '<div class="errormsgbox">E-mail id missing. Enter again</div>';
	else
	 if($first_name=='' || $last_name=='')
	 	echo '<div class="errormsgbox">Name missing. Enter again</div>';
	else
	 	if($college=='')
			echo '<div class="errormsgbox">college missing. Fill again</div>';
		else
			if($roll=='')
				echo '<div class="errormsgbox">roll missing. Fill again</div>';
			else
				if($mobile=='')
					echo '<div class="errormsgbox">Mobile missing. Fill again</div>';
				else {
	
$query1="insert into userentry (username,password,first_name,last_name,sex,college,roll,dept,year,mobile,score) values ('$username',sha1('$pass'),'$first_name','$last_name','$sex','$college','$roll','$dept','$year','$mobile',0);";
$result=mysqli_query($con,$query1);
if ($result) 
 	echo "Registered Sucessfully.. Please Login to Continue";
else 
	echo "Fill again";

$re1=mysqli_query($con,"select * from userentry where username='$username'");
$row=mysqli_fetch_array($re1);
$id=$row['id'];
$query2="insert into login(id,username,password,type) values ('$id','$username',sha1('$pass'),'norm');";
$result=mysqli_query($con,$query2);
$b="insert into user_solved(id,score,total_submissions,correct_submissions,username,solved_problems) values('$id',0,0,0,'$username','')";
echo $b;
$c="insert into leaderboard (id,username,college,score) values ('$id','$username','$college',0)";
if(!mysql_query($b))
	echo "error";
echo '<div class="success">Thank you for
registering! You have sucessfully registered <a href="index.php"><u>Click Here To Log In</u></a> </div>';
				}}}
?>
<center><a href="index.php">Click Here to go to main page</a></center>
</body>
</html>
