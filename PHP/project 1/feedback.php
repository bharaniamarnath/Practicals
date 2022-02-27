<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Feedback</title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/submenu.css" />
</head>
<body>
<div class="header">
<br /><img src="images/header.png"></img>
</div>
<div class="mainboard" style="border-top: 1px solid #00b0dd;">
<h4>Send Feedback to Webstar</h4>
<form action="sendfeedback.php" method="POST">
<table class="mailbox">
<tr>
<td class="mail">From: </td><td><input type="text" name="fbfrom" />&nbsp; <font color="#009bc1">(Enter the sender's email address)</font></td>
</tr>
<tr>
<td class="mail">Subject: </td><td><input type="text" name="fbsubj" /></td>
</tr>
<tr>
<td class="mail">Feedback: </td><td><textarea name="feedbk"></textarea></td>
</tr>
<tr>
<td></td><td><br /><input type="submit" name="sendfb" value="Send Feedback" id="sendbutton" /></td>
</tr>
</table>
</form>
<input type="button" value="Back" onClick="history.go(-1)"></input><br />
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>