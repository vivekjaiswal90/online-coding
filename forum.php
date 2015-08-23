<?php
session_start();

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if(isset($_SESSION['login']) && $_SESSION['login']==1)
	{
		$p=mysql_query("select * from forum_topics ");
		?>
        <table width="414"  height="50" border="0" 
        align="center" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#FFFFFF" ><td width="16">ID</td><td width="130">Topic</td><td width="81">Posted By</td><td width="76">Views</td><td width="89">Replies</td>
        <?
		while($row=mysql_fetch_array($p))
			{
				echo '<tr align="center">';
				echo '<td>' .$row['id'].'</td>';
				echo '<td><a href="forum.php?id='.$row['id'].'">' .$row['topic'].'</a></td>';
				echo '<td>' .$row['postedby'].'</td>';
				if($row['views']==0)
					echo '<td><font color="red">' .$row['views'].'</font></td>';
				else
					echo '<td><font color="green">' .$row['views'].'</font></td>';
				if($row['replies']==0)
					echo '<td><font color="red">' .$row['replies'].'</font></td>';
				else
					echo '<td><font color="green">' .$row['replies'].'</font></td>';
				echo '</tr>';
			}
	}
else
	echo "Please login to continue";
?>
</table>
<?
?>
</body>
</html>