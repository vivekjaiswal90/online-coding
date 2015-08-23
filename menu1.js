<p>var timeout	= 500;<br>
  var closetimer	= 0;<br>
  var ddmenuitem	= 0;</p>
<p>// open hidden layer<br>
  function mopen(id)<br>
  { <br>
  // cancel close timer<br>
  mcancelclosetime();</p>
<p> // close old layer<br>
  if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';</p>
<p> // get new layer and show it<br>
  ddmenuitem = document.getElementById(id);<br>
  ddmenuitem.style.visibility = 'visible';</p>
<p>}<br>
  // close showed layer<br>
  function mclose()<br>
  {<br>
  if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';<br>
  }</p>
<p>// go close timer<br>
  function mclosetime()<br>
  {<br>
  closetimer = window.setTimeout(mclose, timeout);<br>
  }</p>
<p>// cancel close timer<br>
  function mcancelclosetime()<br>
  {<br>
  if(closetimer)<br>
  {<br>
  window.clearTimeout(closetimer);<br>
  closetimer = null;<br>
  }<br>
  }</p>
<p>// close layer when click-out<br>
  document.onclick = mclose; <br>
</p>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
