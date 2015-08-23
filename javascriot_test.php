<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
#sddm
{	margin:2;
	padding: 10;
	z-index: 30}

#sddm li
{	margin: 4;
	padding: 0;
	list-style:none;
	float:left;
	
	font: bold 15px  "Comic Sans MS", cursive}
	

#sddm li a
{	display: block;
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
{	position: absolute;
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
<body>
<ul id="sddm">
    <li><a href="#" 
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">Home</a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="http://localhost/nettech/project/index.php">HTML Drop Down</a>
        <a href="#">DHTML Menu</a>
        <a href="#">JavaScript DropDown</a>
        <a href="#">Cascading Menu</a>
        <a href="#">CSS Horizontal Menu</a>
        </div>
    </li>
    <li><a href="#" 
        onmouseover="mopen('m2')" 
        onmouseout="mclosetime()">Download</a>
        <div id="m2" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">ASP Dropdown</a>
        <a href="#">Pulldown menu</a>
        <a href="#">AJAX Drop Submenu</a>
        <a href="#">DIV Cascading Menu</a>
        </div>
    </li>
    <li><a href="#">Order</a></li>
    <li><a href="#">Help</a></li>
    <li><a href="#">Contact</a></li>
</ul>
<div style="clear:both"></div>
</body>
</html>