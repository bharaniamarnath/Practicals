function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
var z=document.forms["myForm"]["lname"].value;
var a=document.forms["myForm"]["age"].value;
var l=document.forms["myForm"]["location"].value;
var y=document.forms["myForm"]["email"].value;

if (x==null || x=="")
{
alert("First name must be filled out");
return false;
}

if (z==null || z=="")
{
alert("Last name must be filled out"); 
return false;
}

if (a==null || a=="")
{
alert("Age must be filled out"); 
return false;
}

if(a<18)
{
alert("Only age above 18 is valid");
return false;
}

if(l==null || l=="")
{
alert("Select a location"); 
return false;
}

var atpos=y.indexOf("@");
var dotpos=y.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
{
alert("Not a valid e-mail address");
return false;
}
else
{
alert("Valid e-mail address");
}
}