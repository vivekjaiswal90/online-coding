-<?
session_start();
$host="localhost"; // Host name
  $username="root"; // Mysql username
  $password="amol"; // Mysql password
  $db_name="project";
    // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="table1.css" rel="stylesheet" />
<link href="menu.css" rel="stylesheet" />
<script src="menu.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" >
<img src="image.png" align="top" width="589" height="169">
</p>
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
                   <a href="leaderboard.php">LeaderBoard</a>
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
        <div id="m8" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
      <a href="view_all_users.php">View All users</a>
      <a href="Manage_Problem_Sets.php">Manage Problem Sets</a>
      <a href="add_new_section.php">Add New Section</a>
      <a href="remove_section.php">Remove Section</a>
      <a href="add_problems.php">Add Problems</a>
      <a href="add_competition.php">Add Competition</a>
      <a href="manage_judges">Manage Judges</a>
      <ul>
      <li><a href="add_judge.php">Add Judge</a></li>
      <li><a href="delete_judge.php">Delete Judge</a></li></ul>
      
      </div></li>
	<?}
   ?>
  <? if (isset($_SESSION['login']) && $_SESSION['type']=='judge')
   	{
		?><li><a href="#" 
        onmouseover="mopen('m8')" 
        onmouseout="mclosetime()">Judge Panel</a>
        <div id="m8" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
      <a href="Manage_Problem_Sets.php">Manage Problem Sets</a>
      <a href="add_new_section.php">Add New Section</a>
      <a href="remove_section.php">Remove Section</a>
      <a href="add_problems.php">Add Problems</a>
      <a href="add_competition.php">Add Competition</a>
                  
      </div></li>
	<?}
   ?>
   
    <li><a href="index.php?t=1">Log Out</a></li>
    <? }?>
   
</ul>
</p>



<form name="change_password" action="change_password.php" method="post" >
Old Password:<input type="password" name="old_password" /><br />
New Password:<input type="password" name="new_password"  /><br />
Confirm Password:<input type="password" name="confirm_password"  /> <br />

<input type="submit" name="s1" value="Change Password" />
</form>
<?
if(isset($_POST['s1']) && $_SERVER['REQUEST_METHOD']=='POST')
{
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	if($new_password!=$confirm_password)
		{
			echo '<font color="red">Passwords Do Not Match</font>';
		}
	$username=$_SESSION['username'];
	$query11="select * from login where username='$username' and password=sha1('$old_password');";
	$result=mysql_query($query11);
	$count=mysql_num_rows($result);
	if($count==0)
		echo '<font color="red">Invalid Password</font>';
	else
		{
			$query1="update login set password=sha1('$new_password') where username='$username'";
			$r=mysql_query($query1);
			if($r)
				echo '<font color="green">Password Sucessfully Changed</font>';
			$query1="update userentry set password=sha1('$new_password') where username='$username'";
			$r=mysql_query($query1);
			
			
		}
	
}
?>
</body>
</html>