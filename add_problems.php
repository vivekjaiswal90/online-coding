<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

if($_SESSION['login']==1 && ($_SESSION['type']=='admin' || $_SESSION['type']=='judge'))
{
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="table1.css" rel="stylesheet" />
<link href="menu.css" rel="stylesheet" />
<script src="menu.js" type="text/javascript"></script>
<link href="form2.css" rel="stylesheet" />
<link href="menu.css" rel="stylesheet" />
<script src="menu.js" type="text/javascript"></script>
</head>
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



<?
if( isset($_POST['s1']) && $_POST['s1'])
{
	$name=$_POST['section'];
	$query98="delete from category where name='$name'";
	if(!mysql_query($query98))
		echo "Error";
	else
	 echo "Section Sucessfully Deleted";
}
?>
<body bgcolor="#999966">
<h1 align="center">Add New Problem </h1>
<div id="stylized" class="myform">
<form action="problem_added.php" method="post" enctype="multipart/form-data">
<h1>Add Questions</h1>
<label>Category:
<span class="small">Select Category</span>
</label>
<select name="section"><?
$r2=mysql_query("select * from category");
while($row1=mysql_fetch_array($r2))
	{
		$p=$row1['name'];
		$ds="select count(code) as count from problems where section='$p'";
		echo $ds;
		$fe=mysql_query($ds);
		$sq=mysql_fetch_array($fe);
		$cv=$sq['count'];
		echo $cv;
		mysql_query("update category set count=$cv where name='$p'");
		echo '<option value="'.$row1['name'].'">'.$row1['name'].'('.$cv .')'.' </option>';
	}
?>

</select>
<br /><br /><br />
<label>Problem Code
<span class="small">(without spaces)</span>
</label>
<input type="text" name="code" id="email" />

<label>Problem Name
<span class="small">Name of the problem</span>
</label>
<input type="text" name="name"  />

<label>Problem Description
<span class="small">Decribe the Problem</span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="description"></textarea></br><br />

<br /><br />
<label>Input Description
<span class="small">Decribe Input</span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="input"></textarea></br><br />
<br /><br />
<label>Output Description
<span class="small">Decribe Output</span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="output"></textarea></br><br />

<br /><br />
<label>Constraints
<span class="small"></span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="constraints"></textarea></br><br />

<br /><br />

<label>Sample Input
<span class="small">sample</span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="sample_input"></textarea></br><br />

<br /><br />
<label>Sample Output
<span class="small">Sample</span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="sample_output"></textarea></br><br />

<br /><br />
<label>Explanation
<span class="small">Explanation</span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="explanation"></textarea></br><br />

<br /><br />
<label>Judge Input File
<span class="small">Upload test cases</span>
</label><input type="file" name="file"  />

<label>Judge Output File
<span class="small">Upload correct solution to the test cases</span>
</label><input type="file" name="output"  />

<label>Date
<span class="small">Today's Date</span>
</label>
<input type="text" name="date"  value="<? $d1=getdate();
echo date('Y-m-d',$d1[0]);   
?>"/>
<label>Time Limit
<span class="small">(in secs)</span>
</label>
<input type="text" name="time_limit" />
<label>Source Limit
<span class="small">(in KB)</span>
</label>
<input type="text" name="source_limit" " />

<label>Language
<span class="small">Supported Compilers</span>
</label>
<input type="text" name="languages"  />


<label>Score
<span class="small">Award for Correct Solution</span>
</label>
<input type="text" name="score"  />

<input name="reg_page" value="true" type="hidden">
<button type="reset" value="Reset">Reset</button><br /> <br />
<button type="submit" name="s1">Add this problem</button>

<div class="spacer"></div>

</form>
</div>

<?  if ($_SESSION['type']=='admin') 
         echo '  <h3 align="center"><a href="admin.php"><u>Click here to go admin main page</u></a></h3> ';
	else if ($_SESSION['type']=='judge') 
		 echo '  <h3 align="center"><a href="judge.php"><u>Click here to go Judge main page</u></a></h3> ';
?>

</body>
</html>
<?
}
?>