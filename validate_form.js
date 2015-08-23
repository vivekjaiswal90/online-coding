function validateForm()
{
var college=document.forms["form"]["college"].value;
var roll=document.forms["form"]["roll"].value;
var x=document.forms["form"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
   //form.username.focus();
  return false;
  }
var pass=document.forms["form"]["pass"].value;
var repass=document.forms["form"]["repass"].value;
//alert("l");
if (pass==null || repass=="")
  {
  alert("One of the Passwords field is empty");
   //form.username.focus();
  return false;
  }
if(pass!=repass)
	{
		alert("Passwords do not match");
		return false;
	}

var email=document.forms["form"]["email"].value;
var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (atpos<1 || dotpos< atpos+2 || dotpos+2>=email.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var first_name=document.forms["form"]["first_name"].value;
var last_name=document.forms["form"]["last_name"].value;
if (first_name==null || first_name=="" || last_name==null || last_name=="")
  {
  alert("Name field empty");
   //form.username.focus();
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
var college=document.forms["form"]["college"].value;
var roll=document.forms["form"]["roll"].value;

if (college==null || college=="")
  {
  alert("Please enter your college name");
   //form.username.focus();
  return false;
  }
if (roll==null || roll=="")
  {
  alert("please enter your roll");
   //form.username.focus();
  return false;
  }
var mobile= documents.forms["form"]["mobile"].value;
if(documents.forms["form"]["mobile"].value.length==0 || !isNotAlphabets(mobile) || documents.forms["form"]["mobile"].value.length != 10 )
   		{ 
     		alert("Invalid Mobile number... ");
     		return false;
      	}
}

