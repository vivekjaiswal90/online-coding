<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="amol"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name
$windows=1;
$linux=1-$windows;
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

if($_SESSION['login']==1 && ($_SESSION['type']=='admin' || $_SESSION['type']=='judge'))
{
  if(isset($_POST['s1']) && $_SERVER['REQUEST_METHOD']=='POST')
  	{
		$section=addslashes($_POST['section']);
		$code=addslashes($_POST['code']);
		$name=addslashes($_POST['name']);
		$description=addslashes($_POST['description']);
		$input=$_POST['input'];
		$output=$_POST['output'];
		$constraints=addslashes($_POST['constraints']);
//		$sample_input=addslashes($_POST['sample_input']);
	//	$sample_output=addslashes($_POST['sample_output']);
		$sample_input=$_POST['sample_input'];
		$sample_output=$_POST['sample_output'];
		$explanation=addslashes($_POST['explanation']);
		$date=$_POST['date'];
		$time_limit=$_POST['time_limit'];
		$source_limit=$_POST['source_limit'];
		$score=$_POST['score'];
		$languages=addslashes($_POST['languages']);
		$query= "insert into problems(code,name,section,description,input,output,constraints,sample_input,sample_output,explanation,date,time_limit,source_limit,languages,score) values ('$code','$name','$section','$description','$input','$output','$constraints','$sample_input','$sample_output','$explanation','$date','$time_limit','$source_limit','$languages',$score)";
//		echo $query;
		if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {/*
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];*/
  }
  $w=chdir("problems");
  if($windows==1)
  	{
  $fg="mkdir " .$code;
  //echo $fg;
  $r=shell_exec($fg);
  //$w=chdir("\project");
  //echo $w;
  $up=$code."\judge_input.txt";
  $up2=$code."\judge_output.txt";
	}
else
	if($linux==1)
		{
			$fg="mkdir " .$code;
  //echo $fg;
  $r=shell_exec($fg);
  //$w=chdir("\project");
  //echo $w;
  $up=$code."/judge_input.txt";
  $up2=$code."/judge_output.txt";
		}
  move_uploaded_file($_FILES["file"]["tmp_name"],$up);
  move_uploaded_file($_FILES["output"]["tmp_name"],$up2);
  if(!file_exists($up)) {
	echo "File not found. Make sure you specified the correct path.\n";
	exit;
	}
		if($re=mysql_query($query))
			{
				echo "Problem Sucessfully Added";
				$query="insert into solved_count(code,total_submissions,correct_submissions,accuracy) values ('$code',0,0,0)";
				if(!(mysql_query($query)))
					echo "Error";
					
			}
		else
			die ("Error in insertion");
		

	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<br />
<h3 align="center"><a href="add_problems.php"><u>Click here to add more problems</u></a></h3>
<?  

if ($_SESSION['type']=='admin') 
         echo '  <h3 align="center"><a href="admin.php"><u>Click here to go admin main page</u></a></h3> ';
	else if ($_SESSION['type']=='judge') 
		 echo '  <h3 align="center"><a href="judge.php"><u>Click here to go Judge main page</u></a></h3> ';
?>
</body>
</html>
<?
}
?>