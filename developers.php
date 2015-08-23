<?php  
session_start();
if ($_SESSION['login']==1) 
			{echo "Welcome ";
			echo $_SESSION['username']; }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#00CCFF"> 
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


<?
if(isset($_SESSION['login']))
 if ($_SESSION['login']==1) 
			{ ?> <h6 align="right"> <a href="index.php?t=1" <u>Log Out </u></a></h6> <?php } ?>  

<h1 align="center" style="color:#000"> Online Coding Platform</h1>
	</div>


		<div class="bar">

		<ul>
			<li><a href="index.php" title="Compete">Compete</a></li>
			<li><a href="score.php" title="Score Card">Score Card </a></li>
			<li><a href="status.php?" title="Judge Status">Judge Status</a></li>
			<li><a href="faq.php" title="FAQ">FAQs</a></li>
			<li><a href="contact.php" title="Contact us">Contact Us </a></li>
			<li><a href="leaderboard.php" title="LeaderBoard">LeaderBoard</a></li>
			<li><a href="forum.php" title="Forum">Forum </a></li>

			<li><a href="credits.php" title="Credits">Developers</a></li>
			
			<li><a href="register.php" title="Register Here">Registration</a></li>
			<li><a href="sponsor.php" title="Sponsor Us">Sponsor Us</a></li>
		</ul>
</div>

<h1 align="center">The developers are:-</h1>
<h2 align="center"><ol>
<li>Sushant Gupta      09/IT/37
<li>Neeraj Shukla      09/IT/38
<li>Vivek Jaiswal      09/IT/39
<li>Amit Bansal        09/IT/40
<li>Dipen Thapa             09/IT/41
</ol></h2>
</body>
</html>