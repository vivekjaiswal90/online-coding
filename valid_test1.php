<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validateForm()
{
var college=document.forms["regform"]["college"].value;
var roll=document.forms["regform"]["roll"].value;
var roll=document.forms["regform"]["roll"].value;
//alert("oo");
var x=document.forms["regform"]["username"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
   //regform.username.focus();
  return false;
  }
var pass=document.forms["regform"]["pass"].value;
var repass=document.forms["regform"]["repass"].value;
//alert("l");
if (pass==null || repass=="")
  {
  alert("Password field empty");
   //regform.username.focus();
  return false;
  }
if(pass!=repass)
	{
		alert("Passwords do not match");
		return false;
	}

var email=document.forms["regform"]["email"].value;
var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var first_name=document.forms["regform"]["first_name"].value;
var last_name=document.forms["regform"]["last_name"].value;
if (first_name==null || first_name=="" || last_name==null || last_name=="")
  {
  alert("Name field empty");
   //regform.username.focus();
  return false;
  }
  if(isNotAlphabets(first_name))
	{
		alert("The first name field contains invalid characters or spaces.\n Please re-enter your last name again.");
	//	frm.txtLname.focus();
		return false;
	}
if(isNotAlphabets(last_name))
	{
		alert("The last name field contains invalid characters or spaces.\n Please re-enter your last name again.");
	//	frm.txtLname.focus();
		return false;
	}
//alert("p");
if (college==null || college=="")
  {
  alert("Please enter your college name");
   //regform.username.focus();
  return false;
  }
if (roll==null || roll=="")
  {
  alert("please enter your roll");
   //regform.username.focus();
  return false;
  }
var mobile= documents.forms["regform"]["mobile"].value;
if(documents.forms["regform"]["mobile"].value.length==0 || !isNotAlphabets(mobile) || documents.forms["regform"]["mobile"].value.length != 10 )
   		{ 
     		alert("Invalid Mobile number... ");
     		return false;
      	}
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="reg_user.php" method="POST" enctype="application/x-www-form-urlencoded" name="regform" onSubmit="return validateForm();">
    
		<table width="800" bgcolor="#f6f6f6" align="center">
			<tbody>
			<tr>
				<td colspan="2">Please fill in the following form to register:-<br/>

			</td>
			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Username :</td>
				<td width="50%">
					<input maxlength="16" name="username" type="text">&nbsp;*
				</td>
	    
				<!--<td width="20%">
					<input name="button" onclick="check_availability()" value="Check Availability" type="button">

			    </td> -->
        	</tr>
        	<tr>
				<td colspan="2"></td>
				<td width="50%">&nbsp;</td>
			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Password :</td>

				<td width="50%">
					<input maxlength="16" name="pass" id="pass" type="password">&nbsp;*
				</td>
				<td><font color="red" size=-3>Team Name/password should contain atleast 5 alphanumeric characters</font></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>

			<tr bgcolor="#666666">
				<td width="30%">Re-type Password :</td>
				<td width="50%">
					<input maxlength="16" name="repass" id="repass" type="password">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>

			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Email ID :</td>
				<td width="50%">
					<input name="email" id="mail" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>

				<td>&nbsp;</td>
			</tr>
			<tr bgcolor="#666666">
				<td width="30%">First Name :</td>
				<td width="50%">
					<input maxlength="20" name="first_name" id="fname" type="text">&nbsp;*
				</td>
			</tr>
			<tr>

				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Last Name :</td>
				<td width="50%">
					<input maxlength="20" name="last_name" type="text">&nbsp;*
				</td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Sex :</td>
				<td width="50%">
					<input checked="checked" name="sex" value="M" selected="selected" type="radio">

					Male&nbsp;&nbsp;
					<input name="sex" value="F" type="radio">
					Female
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>

			<tr bgcolor="#666666">
				<td width="30%">College :</td>
				<td width="50%">
				<input maxlength="50" name="college" id="college" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>

			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Roll No :</td>
				<td width="50%">
				<input maxlength="10" name="roll" id="rno" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>

				<td>&nbsp;</td>
			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Department :</td>
				<td width="50%">
				<select name="dept">
								<option selected="selected" value="">-Select-</option>
								<option value="BT">BT</option>

								<option value="CSE">CSE</option>
								<option value="CE">CE</option>
								<option value="CHE">CHE</option>
								<option value="EE">EE</option>
								<option value="ECE">ECE</option>
								<option value="IT">IT</option>

								<option value="ME">ME</option>
								<option value="MME">MME</option>
								<option value="MCA">MCA</option>
								<option value="MBA">MBA</option>
				</select>
				</td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr bgcolor="#666666">
				<td width="30%">Year :</td>
				<td width="70%">
					<select name="year" id="yr">

						<option selected="selected" value="">-Select-</option>
						<option value="First">First</option>
						<option value="Second">Second</option>
						<option value="Third">Third</option>
						<option value="Fourth">Fourth</option>
					</select>

				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr bgcolor="#666666">
				<td>Mobile No : </td>

				<td><input type="text" name="mobile" maxlength="10" />
				  *</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			
			<tr>
				<td></td>
				<td>By clicking on 'Register' below, you are agreeing to the Terms of Service of the Program as well as the Privacy Policy. 
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>

				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" align="right">
					<input name="reg_page" value="true" type="hidden">
					<input name="Reset" value="Reset" type="reset">
				</td>
				<td align="left">
					<input name="submit" value="Register" type="submit" onclick="butCheckForm_onclick();">

					</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			</tbody>
		</table>
    
		</form></body>
</html>