<?php
session_start();
$windows=1;
$linux=1-$windows;
$fieldseparator = ",";
$lineseparator = "\n";
$host="localhost"; // Host name
  $username="root"; // Mysql username
  $password="amol"; // Mysql password
  $db_name="project";
    // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['s3']))
{
  //$contacts=$_POST['contacts'];	
  //print_r($_FILES);
  $q_score=$_POST['score'];
  $language=$_POST['language'];
  if($language="c")
  	$compiler="gcc";
  else
  	if($language="g++")
		$compiler="g++";
  $code=$_POST['code'];
  $section=$_POST['section'];
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
  $tg=mysql_query("select * from submissions_list order by sl desc");
  if ($tg)  $ws=mysql_fetch_array($tg);
  $new_name=$ws['sl']+1;
  move_uploaded_file($_FILES["file"]["tmp_name"],"solution/" . $new_name.".".$language);
  if(!file_exists("solution/" . $new_name.".".$language)) {
	echo "File not found. Make sure you specified the correct path.\n";
	exit;
	}
$execution_time=0.000;
if($windows==1)
	{
	 $cmd=$compiler. " solution/".$new_name.".".$language ." -o solution/".$new_name.".out";	
	 $gcc=shell_exec($cmd);
	 chdir("solution");
	 $tu=$new_name.".out <..\problems\\".$code."\\judge_input.txt > Answer".$new_name.".txt";
	 $output=shell_exec($tu);
	 $error=shell_exec("echo %errorlevel%");
	 if($error!=0)
	 	{
			echo '<font color="red">The compiler generated the following error:</font>';
			echo $output;
		}
	else "0";
	 	
	 	$csvfile="..\problems\\".$code."\\judge_output.txt";
	}
	else
		if($linux==1)
			{
				$cmd=$compiler." solution/".$new_name.".".$language ." -o solution/".$new_name.".out";	
	 		   	$gcc=shell_exec($cmd);
				chdir("solution");
				$gcc=shell_exec("ls");
				$tu="./".$new_name.".out <../problems/".$code."/judge_input.txt > Answer".$new_name.".txt";
				//echo $tu;
	 			$output=shell_exec($tu);
				//echo $output;
	 			$csvfile="../problems/".$code."/judge_output.txt";
			}
	 $check1="Answer".$new_name.".txt";
     $file1 = fopen($csvfile,"r");
	 $file2=fopen($check1,"r"); 
	if(!$file1 || !$file2) 
	{
	echo "Error opening data file.\n";
	exit;
	}
 	//echo $csvfile."           f g                  h".$check1;
	$size1=filesize($csvfile);
    $size2=filesize($check1);

$crc1 = strtoupper(dechex(crc32(file_get_contents($csvfile))));
$crc2 = strtoupper(dechex(crc32(file_get_contents($check1))));

if ($crc1!=$crc2) 
{
	$correct=0;
} 
else 
	{
	$correct=1;
	}
/*	
while(!feof($file1) && !feof($file2))
  {
  //$e=fgets($file);//. "<br />";
  $p=fgets($file1);
  $q=fgets($file2);
  if($p!=$q)
  	{
		//echo "not equal\r".$p."   ".$q."   ";
		$correct=0;//break;
	}
	else $correct=1;
  }
*/
	 
	$rt=mysql_query("select * from problems where code='$code'"); 
	$ed=mysql_fetch_array($rt);
	$name=$ed['name'];
	$username=$_SESSION['username'];
	$fd=mysql_query("insert into submissions_list(name,code,language,username,execution_time,correct) values ('name','$code','$language','$username','0.000',$correct)");
	if($correct==1)
		{
	$fg="update solved_count set total_submissions=total_submissions+1,correct_submissions=correct_submissions+1,accuracy=correct_submissions/total_submissions*100 where code='$code'";
	$username1=$_SESSION['username'];
	$df=mysql_query("select * from user_solved where username='$username'");
	$ed=mysql_fetch_array($df);
	$section12=$ed['"$section"'];
	if($section12=='')
		$solved_problems=$code;
	else
		$solved_problems=$solved_problems.','.$code;
	$r="update user_solved set total_submissions=total_submissions+1,correct_submissions=correct_submissions+1,solved_problems='$solved_problems,score=score + $q_score' where username='$username'";
	//echo $r;
	//$s="update ";
		}
	
	else
	    {
	$fg="update solved_count set total_submissions=total_submissions+1,accuracy=correct_submissions/total_submissions*100 where code='$code'";
		$r="update user_solved set total_submissions=total_submissions+1 where username='$username'";
		}
	//echo $fg;
	$p=mysql_query($fg);
	if(!$fd || !$p)
		echo "Error";
	
?>
<html>
<body>
<? if ($correct==1) {?>
<p align="center">
<img src="correct.png">  
<br> Your Score:
<?  
$username=$_SESSION['username'];
$query="select * from user_solved where username='$username'";
$e=mysql_query($query);
$ew=mysql_fetch_array($e);

echo $ew['score'];?>
</h1>

<a href="home.php"><center>Click Here to go to Home</center></a>
</p>
<? } else { ?>
<p align="center"><center>
<img src="wrong.png"><h1>Wrong</h1>
<a href="home.php"><center>Click Here to go to Home</center></a>
</center>
</p>
</body>
</html>
<?	 
}

}
?>
