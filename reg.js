function CheckUp()
{   
 alert("Blank UserName.....");
 	var frm=document.regform;
   if(frm.username.value.length==0)
   { 
     alert("Blank UserName.....");
     frm.username.focus();
     return false;
   }
   if(isNotAlphabets(frm.username.value))
	{
		alert("The USERNAME field contains invalid characters or spaces.\n Please re-enter your first name again.");
		return false;
	} 
   if(frm.first_name.value.length==0)
   { 
     alert("Blank last name ......");
     frm.txtLname.focus();
     return false;
   }
    if(isNotAlphabets(frm.first_name.value))
	{
		alert("The USERNAME field contains invalid characters or spaces.\n Please re-enter your first name again.");
		return false;
	} 
   if(isNotAlphabets(frm.last_name.value))
	{
		alert("The last name field contains invalid characters or spaces.\n Please re-enter your last name again.");
		frm.txtLname.focus();
		return false;
	}
  if(frm.last_name.value.length==0)
   { 
     alert("Blank last name ......");
     frm.txtLname.focus();
     return false;
   }
   // checking email address
   var email = document.forms[0].emailaddress.value
   if(email == "") 
	{
		alert("Please enter a valid  Email address.");
		frm.email.focus();
		return false;
	}
	if ( (email != "") && ((document.forms[0].email.value.indexOf("@")==-1) ||(document.forms[0].email.value.indexOf(".")==-1)))
	{
		alert ("Please enter a valid Email address.");
		frm.email.focus();
		return false;
	}

// end of email checking

	
if(frm.txtadd1.value.length==0)
   { 
     alert("Blank address ......");
     frm.txtadd1.focus();
     return false;
   }

if(frm.cboSex.value=="--Select--")
   { 
     alert("Invalid sex ......");
     frm.cboSex.focus();
     return false;
   }
  
// phone number or mobile number check
if (frm.txtMob.value.length==0)
 {
    if(frm.txtSTD.value.length==0 || !isNotAlphabets(frm.txtSTD.value) || frm.txtSTD.value.length >5 )
   	 	{ 
     		alert("Invalid Std code ......");
	     	frm.txtSTD.focus();
     		return false;
   		}
    if(frm.txtPh.value.length==0 || !isNotAlphabets(frm.txtPh.value) || frm.txtPh.value.length >8 )
   		{ 
     		alert("Invalid phone number ......");
     		frm.txtPh.focus();
     		return false;
      	}
  }
  else
   {
     if(frm.txtMob.value.length==0 || !isNotAlphabets(frm.txtMob.value) || frm.txtMob.value.length != 10 )
   		{ 
     		alert("Invalid Mobile number... ");
     		frm.txtMob.focus();
     		return false;
      	}
   }   	
 // end of phone number or mobile number check
 if( !isDate())
	{
	     return false;	
	 }    
if(frm.cboHostel.value=="--Select--")
   { 
     alert("Invalid Hostel Selection......");
     frm.cboHostel.focus();
     return false;
   }

  if(frm.txtPassword.value.length < 6 )
   { 
     alert("Password to short ......");
     frm.txtPassword.focus();
     return false;
   }
 if(frm.txtPassword.value.length==0 || frm.txtPassword.value.length < 6 )
   { 
     alert("Blank password ......");
     frm.txtPassword.focus();
     return false;
   }
   if(frm.txtRePassword.value==0)
   { 
     alert("Retype the password again ......");
     frm.txtRePassword.focus();
     return false;
   }
   if(frm.txtPassword.value != frm.txtRePassword.value)
   { 
     alert("Password and Retype password is not same ......");
     frm.txtRePassword.focus();
     return false;
   }
    
   return true
   }
   
 ///// end of function checkup  
 
   //FUNCTIONS FOR DATE CHECKING
function isDate()
{
	var yy,mm,dd;
	var im,id,iy;
	var present_date = new Date();
	yy = 1900 + present_date.getYear();
	if (yy > 3000)
	{
		yy = yy - 1900;
	}
	mm = present_date.getMonth();
	dd = present_date.getDate();
	im = document.forms[0].month.selectedIndex;
	id = document.forms[0].day.selectedIndex;
	iy = document.forms[0].year.selectedIndex;
	var entered_month = document.forms[0].month.options[im].value;
	var invalid_month = document.forms[0].month.options[im].value - 1; 
	var entered_day = document.forms[0].day.options[id].value; 
	var entered_year = document.forms[0].year.options[iy].value; 
	if ( (entered_day == 0) || (entered_month == 0) || (entered_year == 0) )
	{
		alert("Please enter your birhtday");
		return false;
	}
	if ( is_greater_date(entered_year,entered_month,entered_day,yy,mm,dd) && is_valid_day(invalid_month,entered_day,entered_year) )
	{
		return true; 
	}
	return false;
}

 function is_greater_date(entered_year,entered_month,entered_day,yy,mm,dd)
{
	if (entered_year > yy)
	{
		alert("The birthday field is entered incorrectly. The year entered exceeds the current year.");
		return false;
	}
	if (entered_year == yy)
	{
		if (entered_month > mm)
		{
			alert("The birthday field is entered incorrectly.");
			return false;
		}
		if (entered_month == mm)
		{
			if (entered_day > dd)
			{
				alert("The birthday field is entered incorrectly.");
				return false;
			}
		}
	}
	return true;
}

function is_valid_day(entered_month,entered_day,entered_year)
{
	if ((entered_year % 4) == 0) 
	{ 
		var days_in_month = "312931303130313130313031";
 	}
 	else 
	{ 
		var days_in_month = "312831303130313130313031";
 	} 
	var months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
	if (entered_month != -1)
	{
		if (entered_day > days_in_month.substring(2*entered_month,2*entered_month+2))
		{
			alert ("The birthday field is entered wrongly (the day field value exceeds the number of days for the month entered).");
			return false;
		}
	}
	return true;
}





// END OF DATE CHECKING FUNCTION
   
   
   
   // func tion for alphabatic
   
   function isNotAlphabets(str)
{
	for (var i = 0; i < str.length; i++)
	{
		var ch = str.substring(i, i + 1);
		if((ch < "a" || "z" < ch) && (ch < "A" || "Z" < ch)) 
		{
			return true;
		}
	}
	return false;
}
