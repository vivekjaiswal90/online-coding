<p>function CheckUp(frm)<br>
  { </p>
<p> if(frm.txtFname.value.length==0)<br>
  { <br>
  alert("Blank First Name.....");<br>
  frm.txtFname.focus();<br>
  return false;<br>
  }<br>
  if(isNotAlphabets(frm.txtFname.value))<br>
  {<br>
  alert("The first name field contains invalid characters or spaces.\n Please re-enter your first name again.");<br>
  return false;<br>
  } <br>
  if(frm.txtLname.value.length==0)<br>
  { <br>
  alert("Blank last name ......");<br>
  frm.txtLname.focus();<br>
  return false;<br>
  }<br>
  if(isNotAlphabets(frm.txtLname.value))<br>
  {<br>
  alert("The last name field contains invalid characters or spaces.\n Please re-enter your last name again.");<br>
  frm.txtLname.focus();<br>
  return false;<br>
  }<br>
  // checking email address<br>
  var email = document.forms[0].emailaddress.value<br>
  if(email == "") <br>
  {<br>
  alert("Please enter a valid  Email address.");<br>
  frm.emailaddress.focus();<br>
  return false;<br>
  }<br>
  if ( (email != "") && ((document.forms[0].emailaddress.value.indexOf("@")==-1) ||(document.forms[0].emailaddress.value.indexOf(".")==-1)))<br>
  {<br>
  alert ("Please enter a valid Email address.");<br>
  frm.emailaddress.focus();<br>
  return false;<br>
  }</p>
<p>// end of email checking</p>
<p> <br>
  if(frm.txtadd1.value.length==0)<br>
  { <br>
  alert("Blank address ......");<br>
  frm.txtadd1.focus();<br>
  return false;<br>
  }</p>
<p>if(frm.cboSex.value=="--Select--")<br>
  { <br>
  alert("Invalid sex ......");<br>
  frm.cboSex.focus();<br>
  return false;<br>
  }<br>
  <br>
  // phone number or mobile number check<br>
  if (frm.txtMob.value.length==0)<br>
  {<br>
  if(frm.txtSTD.value.length==0 || !isNotAlphabets(frm.txtSTD.value) || frm.txtSTD.value.length >5 )<br>
  { <br>
  alert("Invalid Std code ......");<br>
  frm.txtSTD.focus();<br>
  return false;<br>
  }<br>
  if(frm.txtPh.value.length==0 || !isNotAlphabets(frm.txtPh.value) || frm.txtPh.value.length >8 )<br>
  { <br>
  alert("Invalid phone number ......");<br>
  frm.txtPh.focus();<br>
  return false;<br>
  }<br>
  }<br>
  else<br>
  {<br>
  if(frm.txtMob.value.length==0 || !isNotAlphabets(frm.txtMob.value) || frm.txtMob.value.length != 10 )<br>
  { <br>
  alert("Invalid Mobile number... ");<br>
  frm.txtMob.focus();<br>
  return false;<br>
  }<br>
  } <br>
  // end of phone number or mobile number check<br>
  if( !isDate())<br>
  {<br>
  return false; <br>
  } <br>
  if(frm.cboHostel.value=="--Select--")<br>
  { <br>
  alert("Invalid Hostel Selection......");<br>
  frm.cboHostel.focus();<br>
  return false;<br>
  }</p>
<p> if(frm.txtPassword.value.length < 6 )<br>
  { <br>
  alert("Password to short ......");<br>
  frm.txtPassword.focus();<br>
  return false;<br>
  }<br>
  if(frm.txtPassword.value.length==0 || frm.txtPassword.value.length < 6 )<br>
  { <br>
  alert("Blank password ......");<br>
  frm.txtPassword.focus();<br>
  return false;<br>
  }<br>
  if(frm.txtRePassword.value==0)<br>
  { <br>
  alert("Retype the password again ......");<br>
  frm.txtRePassword.focus();<br>
  return false;<br>
  }<br>
  if(frm.txtPassword.value != frm.txtRePassword.value)<br>
  { <br>
  alert("Password and Retype password is not same ......");<br>
  frm.txtRePassword.focus();<br>
  return false;<br>
  }<br>
  <br>
  return true<br>
  }<br>
  <br>
  ///// end of function checkup <br>
  <br>
  //FUNCTIONS FOR DATE CHECKING<br>
  function isDate()<br>
  {<br>
  var yy,mm,dd;<br>
  var im,id,iy;<br>
  var present_date = new Date();<br>
  yy = 1900 + present_date.getYear();<br>
  if (yy > 3000)<br>
  {<br>
  yy = yy - 1900;<br>
  }<br>
  mm = present_date.getMonth();<br>
  dd = present_date.getDate();<br>
  im = document.forms[0].month.selectedIndex;<br>
  id = document.forms[0].day.selectedIndex;<br>
  iy = document.forms[0].year.selectedIndex;<br>
  var entered_month = document.forms[0].month.options[im].value;<br>
  var invalid_month = document.forms[0].month.options[im].value - 1; <br>
  var entered_day = document.forms[0].day.options[id].value; <br>
  var entered_year = document.forms[0].year.options[iy].value; <br>
  if ( (entered_day == 0) || (entered_month == 0) || (entered_year == 0) )<br>
  {<br>
  alert("Please enter your birhtday");<br>
  return false;<br>
  }<br>
  if ( is_greater_date(entered_year,entered_month,entered_day,yy,mm,dd) && is_valid_day(invalid_month,entered_day,entered_year) )<br>
  {<br>
  return true; <br>
  }<br>
  return false;<br>
  }</p>
<p> function is_greater_date(entered_year,entered_month,entered_day,yy,mm,dd)<br>
  {<br>
  if (entered_year > yy)<br>
  {<br>
  alert("The birthday field is entered incorrectly. The year entered exceeds the current year.");<br>
  return false;<br>
  }<br>
  if (entered_year == yy)<br>
  {<br>
  if (entered_month > mm)<br>
  {<br>
  alert("The birthday field is entered incorrectly.");<br>
  return false;<br>
  }<br>
  if (entered_month == mm)<br>
  {<br>
  if (entered_day > dd)<br>
  {<br>
  alert("The birthday field is entered incorrectly.");<br>
  return false;<br>
  }<br>
  }<br>
  }<br>
  return true;<br>
  }</p>
<p>function is_valid_day(entered_month,entered_day,entered_year)<br>
  {<br>
  if ((entered_year % 4) == 0) <br>
  { <br>
  var days_in_month = "312931303130313130313031";<br>
  }<br>
  else <br>
  { <br>
  var days_in_month = "312831303130313130313031";<br>
  } <br>
  var months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");<br>
  if (entered_month != -1)<br>
  {<br>
  if (entered_day > days_in_month.substring(2*entered_month,2*entered_month+2))<br>
  {<br>
  alert ("The birthday field is entered wrongly (the day field value exceeds the number of days for the month entered).");<br>
  return false;<br>
  }<br>
  }<br>
  return true;<br>
  }</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>// END OF DATE CHECKING FUNCTION<br>
  <br>
  <br>
  <br>
  // func tion for alphabatic<br>
  <br>
  function isNotAlphabets(str)<br>
  {<br>
  for (var i = 0; i < str.length; i++)<br>
  {<br>
  var ch = str.substring(i, i + 1);<br>
  if((ch < "a" || "z" < ch) && (ch < "A" || "Z" < ch)) <br>
  {<br>
  return true;<br>
  }<br>
  }<br>
  return false;<br>
  }<br>
</p>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>