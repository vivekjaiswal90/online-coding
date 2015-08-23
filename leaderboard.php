<?php  
session_start();
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

if ($_SESSION['login']==1) 
			{echo "Welcome ";
			echo $_SESSION['username']; }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="table1.css" rel="stylesheet" />
<link href="menu.css" rel="stylesheet" />
<script src="menu.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css" >
table {
	width: 50%;
	color: #212424;
	margin: 20 20 5em 0;	
	font: 80%/150% "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Lucida, Helvetica, sans-serif;
}
table, tr, th, td {
	margin: 0;
	padding: 0;
	border-spacing: 0;
	border-collapse: collapse;
}
caption {
	width: 100%;
	height: 39px;
	font-size: 0;
	line-height: 0;
	text-indent: -5000em;
	}
caption:hover {
	background-position: 98% 100%;
}

/* HEADER */

thead {
	background: #524123;
}
thead tr th {
	padding: 1em 0;
	text-align: center;
	color: #FAF7D4;
	border-bottom: 3px solid #A5D768;
}

/* FOOTER */

tfoot {
	color: #fff;
	background: #524123;
}
tfoot tr th, tfoot tr td {
	padding: .2em .6em;
	border-top: 2px solid #A5D768;
}
tfoot tr th {
}
tfoot tr td {
	text-align: right;
}

/* BODY */

tbody tr td {
	background: #DDF0BD no-repeat top left;
}
tbody tr.odd td {
	background-color: #D0EBA6;
}
tbody tr td:hover, tbody tr.odd td:hover {
	background: #c5e894;
}
tbody tr th, tbody tr td {
	padding: 0.1em 0.4em;
	border: 1px solid #a6ce39;
}
tbody tr th {
	padding-right: 1em;
	text-align: right;
	font-weight: normal;
	background: #c5e894  no-repeat top left;
	text-transform: uppercase;
}
tbody tr th:hover {
	background: #D0EBA6;
}
table a["Name"] {
	float: left;
	width: 64px;
	height: 64px;
	font-size: 0;
	text-decoration: none;
	
}
table a[title^="Accuracy"] {
	float: none;
	width: auto;
	height: auto;
	font-size: 100%;
	background: none;
}

/* LINKS */

table a {
	color: #854400;
	text-decoration: none;
}
table a:visited {
	text-decoration: line-through;
}
table a:hover {
	text-decoration: underline;
}
</style>

</head>

<body>
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
     <li><a href="home.php" 
        onmouseover="mopen('m3')" 
        onmouseout="mclosetime()">Forum</a>
    
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


 <table><caption>LeaderBoard</caption><thead><tr><th scope="col">Rank</th><th scope="col">Name</th><th scope="col">Score</th><th scope="col">College</th><th scope="col">Place</th></tr></thead>

<?
$query="select * from user_solved order by score desc";
$p=mysql_query($query);
while($df=mysql_fetch_array($p))
	{
		echo "<tr> <td>".$df['id']."</td><td>".$df['username']."</td><td>".$df['score']."</td> <td>".$fg['college']."</td><td>".$fg['place']."</td></tr>";
	}
	

?>
</table>
</body>
</html>