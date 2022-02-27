<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="validate.js"></script>
<style>
body
{
background-color: #eee;
font-family:calibri;
font-size:14px;
font-weight:bold;
}
select
{
font-family:calibri;
font-size:14px;
font-weight:bold;
}
table
{
margin:250px;
}
input[type="submit"]
{
color:#000;
font-family:calibri;
font-size:14px;
font-weight:bold;
background-color:#eee;
float:right;
}
th
{
color:#000;
font-family:calibri;
font-size:18px;
font-weight:bolder;
padding-bottom:10px;
text-align:left;
}
</style>
</head>
<body>
<form name="myForm" action="email.jsp" onsubmit="return validateForm();" method="post">
<table>
<th colspan="2">Registration Form</th>
<tr><td>First name: </td><td><input type="text" name="fname"></td></tr>
<tr><td>Last name: </td><td><input type="text" name="lname"></td></tr>
<tr><td>Age: </td><td><input type="text" name="age"></td></tr>
<tr><td>Location: </td><td><select name="location">
<option value="Chennai">Chennai</option>
<option value="Bangalore">Bangalore</option>
</select></td></tr>
<tr><td>Email: </td><td><input type="text" name="email"></td></tr>
<tr><td></td><td><input type="submit" value="Submit"></td></tr>
</table>
</form>
</body>
</html>
