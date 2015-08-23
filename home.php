<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name+

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

if(isset($_SESSION['login']))
 if ($_SESSION['login']==1) 
	{
		if($_SESSION['type']=='norm')
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
<link rel="stylesheet" href="form3.css" />
<link href="table.css"  rel="stylesheet"/>
<link href="menu2.css" rel="stylesheet" />
<script type="application/javascript" src="menu.js"></script>
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



<?php
	if(isset($_SESSION['login']))
 if ($_SESSION['login']==1) 
			{ ?> <h6 align="right"> <a href="index.php?t=1" ><u>Log Out </u></a></h6> <?php } ?>  

</body>
</html>
<?
			}
		else
		 if($_SESSION['type']=='admin')
		 	{
				header("Location:admin.php");
			}
		else
			if($_SESSION['type']=='judge')
		 	{
				header("Location:judge.php");
			}
	
	}
else
 header("Location:index.php");
$query12="select * from category";
$re14=mysql_query($query12);
echo "<ul>";
while($row13=mysql_fetch_array($re14))
{
	//echo $row13['name'];
	echo '<li> <a href="home.php?section='.$row13['name'].'">'.$row13['name']. '</a></li>';
}
echo "</ul>";
if ( $_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['section']))
	{
		$section=$_GET['section'];
		echo '<p align="center">'.$section.'</p>';
		if(!($s2=mysql_query("select * from problems where section='$section'")))
			echo "Error";
		?>
        <!--
        <table width="45%" border="2" align="center">
        <tr bgcolor="#66FFCC" bordercolor="#FFFFFF" ><td width="45%" align="center"  >Name</td><td>Code</td><td>Total Submissions</td><td>Sucessful Submissions</td><td>Accuracy</td></font> </tr>
        -->
        <p align="center">
        <table><caption>Problems</caption><thead><tr><th scope="col">Name</th><th scope="col">Code</th><th scope="col">Total Submissions</th><th scope="col">Sucessful Submissions</th><th scope="col">Accuracy</th></tr></thead>


		<?
		while($row23=mysql_fetch_array($s2))
			{
				$op=$row23['code'];
				$query11="select * from solved_count where code='$op'";
				$d1=mysql_query($query11);
				$fg=mysql_fetch_array($d1);
				echo "<tr> <td><a href=home.php?code=$op><u>" .$row23['name'] ."</u></a></td><td>".$row23['code']."</td><td>".$fg['total_submissions']."</td> <td>".$fg['correct_submissions']."</td><td>".$fg['accuracy']."</td></tr>";
			}
//		echo $s2;
		echo "</table></p>";	
		
		
	}
if ( $_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['code']))
	{
		        ?>
        <?
		
		$rt=$_GET['code'];
		$ew=mysql_query("select * from problems where code='$rt'");
		$as=mysql_fetch_array($ew);?>
		<div id="stylized" class="myform">
<form action="submit_solution.php" method="post" enctype="multipart/form-data">
<legend>Current Section:<? echo $as['section'];?></legend>
<h1><? echo '<font color="red" ><center>You earn '.$as['score']." points by completing this problem</center></font>"?></h1>
<label>Section
<span class="small">Section</span>
</label>
<input type="text" name="section"  readonly="readonly" value="<? echo $as['section']; ?>" />

<label>Problem Code
<span class="small"></span>
</label>

<input type="text"  readonly="readonly" value="<? echo $as['code']; ?>" name="code" id="email" />

<label>Problem Name
<span class="small">Name of the problem</span>
</label>
<input type="text" name="name"  readonly="readonly" value="<? echo $as['name']; ?>" />

<label>Problem Description
<span class="small"></span>
</label>
&nbsp;&nbsp;<textarea  readonly="readonly" cols="41" rows="5" name="description" value=" "><? echo $as['description']; ?></textarea></br><br />

<br /><br />
<label>Input Description
<span class="small"></span>
</label>
&nbsp;&nbsp;<textarea  readonly="readonly"  value="" cols="41" rows="5" name="input"><? echo  $as['input']; ?></textarea></br><br />
<br /><br />
<label>Output Description
<span class="small"></span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5"  readonly="readonly"  name="output"><? echo  $as['output']; ?></textarea></br><br />

<br /><br />
<label>Constraints
<span class="small"></span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5"  readonly="readonly" name="constraints"><? echo  $as['constraints']; ?></textarea></br><br />

<br /><br />

<label>Sample Input
<span class="small"></span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="sample_input"><? echo  $as['sample_input']; ?></textarea></br><br />

<br /><br />
<label>Sample Output
<span class="small"></span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5" name="sample_output"><? echo  $as['sample_output']; ?></textarea></br><br />

<br /><br />
<label>Explanation
<span class="small">Explanation</span>
</label>
&nbsp;&nbsp;<textarea cols="41" rows="5"  readonly="readonly" name="explanation"><? echo  $as['explanation']; ?></textarea></br><br />

<br /><br />
<label>Date Submitted
<span class="small"></span>
</label>
<input type="text"  readonly="readonly" name="date"  value="<? echo $as['date'];   
?>"/>
<label>Time Limit
<span class="small">(in secs)</span>
</label>
<input type="text" name="time_limit"  readonly="readonly" value=" <? echo $as['time_limit'];?>"/>
<label>Source Limit
<span class="small">(in KB)</span>
</label>	
<input type="text" name="source_limit" readonly="readonly" value="<? echo $as['source_limit'];?>" />

<label>Language
<span class="small">Supported Compilers</span>
</label>
<input type="text" name="languages"  readonly="readonly" value="<?  echo $as['languages']; ?>" />

<label>Your Solution
<span class="small">Upload</span>
</label><input type="file" name="file"  />
<br /><br />
&nbsp;
<label> Select Language</label>
<span class="small">C </span>
<br />C
<input  class="radio" type="radio" name="language"  value="c"/>
<span class="small">C++</span>
<input   class="radio" type="radio" name="language"  value="cpp"/>C++
     
<input type="hidden" name="section" value=" <? echo $as['section'];  ?>"/>
<button type="submit" name="s3">Submit Solution</button>

<div class="spacer"></div>

</form>
</div>
<?
	}
?>