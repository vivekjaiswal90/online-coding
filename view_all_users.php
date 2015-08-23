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

//echo $_SESSION['login'];
if( isset ($_SESSION['login']) && $_SESSION['login']==1 && $_SESSION['type']=='admin')
{
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

<body bgcolor="#999966">
<?
if(isset($_SESSION['login']))
 if ($_SESSION['login']==1) 
			{ ?> <h6 align="right"> <a href="index.php?t=1"> <u>Log Out </u></a></h6> <?php } ?>  

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

        <table><caption>All Registered Users</caption><thead><tr><th scope="col">Id</th><th scope="col">Username</th><th scope="col">First Name</th><th scope="col">Last Name</th><th scope="col">Sex</th><th scope="col">College</th><th scope="col">Disabled</th><th scope="col">Click To Disable</th><th scope="col">Remove</th></thead>

<h2 align="center"> All Registered Users</h2>
<?	
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
if($_SERVER['REQUEST_METHOD'] == 'GET'  && isset($_GET['id']))
	{
		$id=$_GET['id'];
		if(isset($_GET['disable']) )
			{
					$disable=$_GET['disable'];
					if($disable==0)
						$query19="update login set disable=0 where id=$id";
					if($disable==1)
						$query19="update login set disable=1 where id=$id";
					mysql_query($query19);
			}
		/*if(isset($_GET['chg_passwd']))
			{
				
				mysql_query($query9);
			}*/
 		if(isset($_GET['remove']))
			{
				$remove=$_GET['remove'];
				$query9="delete from userentry where id=$id";
				$query10="delete from login where id=$id";
				mysql_query($query9);
				mysql_query($query10);
			}

	}

$query1="select * from userentry";
$re1=mysql_query($query1);

while($row1=mysql_fetch_array($re1))
{	
	$ty=$row1['username'];
	$query2="select * from login where username='$ty' ";
	//echo $query2;
	$re2=mysql_query($query2);
	$count7=mysql_num_rows($re2);
	$row2=mysql_fetch_array($re2);
	if($re2!=0)
	{
	echo "<tr>";
	echo "<td>" .$row1['id']."</td>";
	echo "<td>" .$row1['username']."</td>";
	echo "<td>" .$row1['first_name']."</td>";
	echo "<td>" .$row1['last_name']."</td>";
	echo "<td>" .$row1['sex']."</td>";
	echo "<td>" .$row1['college']."</td>";

	if ($row2['disable']==0)
		{
			echo "<td> No</td>";
			//echo "<td>".$row1['id']."</td>";
			echo '<td><a href="view_all_users.php?id='.$row1['id'].'&disable=1"><font color="red"><u>Disable</font></u></a></td>';
		}
	else
		{
			echo "<td> Yes</td>";
			echo '<td><a href="view_all_users.php?id='.$row1['id'].'&disable=0"><u>Enable</u></a></td>';
		}
	//echo '<td><a href="view_all_users.php?id="'.$row1['id'].'&chg_passwd=1"><font color="red"><u>Change Password</font></a></td>';
		echo '<td><a href="view_all_users.php?id='.$row1['id'].'&remove=1"><font color="red"><u>Remove</font></a></td>';
	
	echo "</tr>";
	}
}

?>
</table>
<h3 align="center"><a href="admin.php"><u>Click here to go admin main page</u></a></h3>
</body>
</html>
<?
}
else
 echo "Error check";
 //header("Location:home.php");

?>