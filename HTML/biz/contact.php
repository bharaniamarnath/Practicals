<?php
if(isset($_POST['cemail'])) {
     
    $email_to = "cephilo@gmail.com";
    $email_subject = "Contact Message";
     
     
    function died($error) {
        echo "Error in sending feedback";
        echo $error."<br /><br />";
        echo "Go Back <br /><br />";
        die();
    }
     
    if(!isset($_POST['cname']) ||
        !isset($_POST['cemail']) ||
        !isset($_POST['cweb']) ||
        !isset($_POST['cmessage'])) {
        died('Error in Form Details.');      
    }
     
    $c_name = $_POST['cname']; 
    $c_email = $_POST['cemail']; 
    $c_web = $_POST['cweb']; 
    $c_message = $_POST['cmessage']; 
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$c_email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$c_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($c_message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($c_name)."\n";
    $email_message .= "Email: ".clean_string($c_email)."\n";
    $email_message .= "Website: ".clean_string($c_web)."\n";
    $email_message .= "Message: ".clean_string($c_message)."\n";
     
     
$headers = 'From: '.$c_email."\r\n".
'Reply-To: '.$c_email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body>
<div id="container">
<div class="menu">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="about.html">ABOUT</a></li>
<li><a href="articles.html">ARTICLES</a></li>
<li id="current"><a href="contact.html">CONTACTS</a></li>
<li style="border-right: none;"><a href="sitemap.html">SITEMAP</a></li>
</ul>
<div class="menuicons">
<a class="homeicon" href="home.html"></a>
<a class="contacticon" href="contact.html"></a>
<a class="siteicon" href="sitemap.html"></a>
</div>
</div>
<div id="header">
<img src="images/biz-logo.png" />
<div id="searchbar">
<form action="#" method="POST">
<input type="text" name="search" />
<input type="submit" value="" class="search-button"></input>
</form>
</div>
<div id="content-left">
<div id="message-sent" style="font-family: trebucit; font-size: 14px;">
<h4><font color="#f85811">Message Sent. </font>Thank you for contacting us!</h4>
</div>
</div>
</div>
</div>
<div id="footer">
</div>
</div>
</body>
</html>
 
<?php
}
?>
