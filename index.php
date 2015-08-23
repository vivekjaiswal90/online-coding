<?php  
session_start(); 
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name
 ob_start(); 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
if($_SERVER['REQUEST_METHOD'] == 'GET'  && isset($_GET['t']))
if($_GET['t']=='1')
	{
	//session_start();
	$_SESSION['login']=0;
	unset($_SESSION['login']);
	session_destroy();
	
	}

if (isset($_SESSION['login']) && $_SESSION['login']==1) 
			{echo "Welcome ";
			echo $_SESSION['username'];
			
 }
//session_destroy();
//$t=$_POST['t'];
	
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="menu.css" rel="stylesheet" />
<script src="menu.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="menu.css" rel="stylesheet">
<style>
#sddm
{	margin:40;
	padding: 10;
	z-index: 30;
	height:20 px;
	size:landscape;
	 position:relative 30 px;
	 width:inherit;
    
	 		
}

#sddm li
{	
	border:#000 solid 1	px;
	margin: 4;
	padding: 0;
	list-style:none;
	float:left;
	font: bold 15px  "Comic Sans MS", cursive}
	

#sddm li a
{	width:auto;
	display: block;
	margin: 0 1px 0 0;
	padding: 4px 10px;
	width: 80px;
	background: #600;
	color: #FFF;
	text-align: center;
	text-decoration: none}

#sddm li a:hover
{	background: #FFF;
	color:#600}

#sddm div
{	position:absolute;
	visibility: hidden;
	margin: 0;
	padding: 0;
	background: #600;
	border: 1px solid #600;
	}

	#sddm div a
	{	position: relative;
		display: block;
		margin: 0;
		padding: 5px 10px;
		width: auto;
		white-space: nowrap;
		text-align: left;
		text-decoration: none;
		background: #EAEBD8;
		color: #600;
		font: 16px "Comic Sans MS", cursive}

	#sddm div a:hover
	{	background: #49A3FF;
		color: #FFF}
</style>
<script type="text/javascript">
var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
</script>
</head>

<body bgcolor="#FFFFFF">
<p align="center" >
<img src="image.png" align="top" width="589" height="169">
</p>
<p align="center">
<ul id="sddm">
    <li><a href="compete.php" 
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">Compete</a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?
		$query12="select * from active_competitions";
		
		$red=mysql_query($query12);
		if(!$red)
			echo "Error";
		while($row=mysql_fetch_array($red))
			{
				echo '<a href="compete.php?competition='.$row['id'].'">'.$row['name'].' </a>';
			}
		?>
        </div>
    </li>
    <li><a href="home.php" 
        onmouseover="mopen('m2')" 
        onmouseout="mclosetime()">Practice</a>
        <div id="m2" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?
		$query12="select * from category";
		$red=mysql_query($query12);
		while($row=mysql_fetch_array($red))
			{
				echo '<a href="home.php?section='.$row['name'].'">'.$row['name'].' </a>';
			}
		?>
                </div>
    </li>
    <li>
        <div align="center"><a href="leaderboard.php" 
        onmouseover="mopen('m4')" 
        onmouseout="mclosetime()">LeaderBoard</a>
        </div>
        <div id="m4" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
          
        </div>
      
        
         </li>
         <li><a href="#"
         onmouseover="mopen('m5')" 
        onmouseout="mclosetime()">Score
        </a>
<div id="m5" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
		           <a href="myscore.php">My Score</a>      
         </div>

    </li>
    
     <li><a href="credits.php" 
        onmouseover="mopen('m6')" 
        onmouseout="mclosetime()">Credits</a>
        <div id="m6" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
      <a href="credits.php">Developers</a>
      <a href="sponsors.php">Sponsors</a>
        </div>
      
        
     </li>
     <li>
     <a href="contacts.php">Contact</a>
     </li>
    <? if ( isset($_SESSION['login']) && $_SESSION['login']==1 )
			{
	?>
     <li><a href="#" 
        onmouseover="mopen('m7')" 
        onmouseout="mclosetime()">Account</a>
        <div id="m7" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
      <a href="change_password.php">Change Password</a>
      <a href="View_scorecard.php">View ScoreCard</a>
        </div>
      
        
     </li>
   
   <? if (isset($_SESSION['login']) && $_SESSION['type']=='admin')
   	{
		?><li><a href="#" 
        onmouseover="mopen('m8')" 
        onmouseout="mclosetime()">Admin Panel</a>
        <div id="m7" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
      <a href="view_all_users.php">View All users</a>
      <a href="Manage_Problem_Sets.php">Manage Problem Sets</a>
      <a href="manage_judges">Manage Judges</a>
      </div></li> 
	<?}
   ?>
   
    <li><a href="index.php?t=1">Log Out</a></li>
    <? }?>
   
</ul>
</p>

<?php
if(isset($_SESSION['login']) && $_SESSION['login']==1)
{
header("Location:home.php");
		
	}
else
{
?>
<form name="loginform" action="index.php" method="POST">
<p align="right">

					<div align="right">
                                              <?php
						  if( isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'])=='POST')
						  	{
							
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['pass'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password=sha1('$mypassword')";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
$row=mysql_fetch_array($result);
if($count==1)
{
	if($row['disable']==1)
				 {echo "<tr><td><font color='red'>You have been disabled by administrator</font></td></tr>";
				 }
	else
	{
	$_SESSION['login']=1;
	$_SESSION['username']=$row['username'];
	$_SESSION['password']=$row['password'];
	$_SESSION['type']=$row['type'];
	echo "Welcome  ";
	echo $_SESSION['username'];
	header("Location:home.php");
	}
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword");
//header("location:login_success.php");
}
else {
echo "<tr><td><font color='red'>Wrong Username or Password</font></td></tr>";
}
							}
?>
					  <table width="458" height="117">
					    <tr>
					      <td width="87">Username</td>
					      <td width="168"><input name="username" type="text" id="tname"></td>
					      </tr>
					    <tr>
					      <td>Password</td>
					      <td><input name="pass" type="password" id="tpass"></td>
					      
					      </tr>
					    <tr>
					      <td colspan="2" align="right"><input name="submit"  type="submit" value="Login"></td>
					      </tr>

					    <tr>
					      <td height="24" colspan="2"><a href="register.php" ><br />Register</a></td>
					      <td width="187" colspan="2"><a href="mailpasswd.php"><br />Forgot Password?</a></td:w
>
			            </tr>
					    
					    </table>
  </div> 
					</p>
				</form>
				<p>&nbsp;</p>
<?
}
ob_flush();
?>
</body>
</html>