<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<title>Untitled Document</title>

<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/menubar.css" rel="stylesheet" type="text/css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    function slideSwitch() {
        var $active = $('div#slideshow IMG.active');
        var $next = $active.next();    

        $next.addClass('active');

        $active.removeClass('active');
    }

    $(function() {
        setInterval( "slideSwitch()", 5000 );
    });
</script>

</head>

<body>
<div id="container">
<div id="header">
<img id="headerlogo" src="images/logo.png" />
</div>
<div class="menu">
<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a>
					<ul>
						<li><a href="#">New Born</a></li>
						<li><a href="#">Baby</a></li> 
						<li><a href="#">Toddler</a></li>
						<li><a href="#">Pre-School</a></li>
					</ul>
				</li>
				<li><a href="#">Contact Us</a></li>				
			</ul>
</div>
<div id="subcontainer">
<div id="slideshow">
    <img src="images/ad1.png" style="position:absolute;" class="active" />
    <img src="images/ad2.png" style="position:absolute;" />
    <img src="images/ad3.png" style="position:absolute;" />
</div>
<div id="content">
<h3>About Diapers</h3>
<p>A diaper or nappy is a kind of underwear that allows one to defecate or urinate in a discreet manner. When diapers become soiled, they require changing; this process is often performed by a second person such as a parent or caregiver. 
Failure to change a diaper on a regular enough basis can result in skin problems. Diapers are made of cloth or synthetic disposable materials. Cloth diapers are composed of layers of fabric such as cotton, hemp, bamboo or microfiber and can be washed and reused multiple times. Disposable diapers contain absorbent chemicals and are thrown away after use. Plastic pants can be worn over diapers to avoid leaks, but with modern cloth diapers, this is no longer necessary.[citation needed]. 
Diapers are primarily worn by children who are not yet potty trained or experience bedwetting. However, they can also be used by adults with incontinence or in certain circumstances where access to a toilet is unavailable. These can include the elderly, those with a physical or mental disability, and people working in extreme conditions such as astronauts. It is not uncommon for people to wear diapers under dry suits.</p>
</div>
</div>
<div class="footer">
<table class="quicklink" align="left"><tr>
<th>Quick Links</th></tr> <tr><td><a class="shortcut" href="#">Home</a></td></tr> <tr><td><a class="shortcut" href="#">Products</a></td></tr> <tr><td><a class="shortcut" href="#">About Us</a></td></tr> <tr><td><a class="shortcut" href="#">Contact Us</a></td></tr></table>
<table class="quicklink" align="left"><tr>
<th>Products</th></tr> <tr><td><a class="shortcut" href="#">New Born</a></td></tr> <tr><td><a class="shortcut" href="#">Baby</a></td></tr> <tr><td><a class="shortcut" href="#">Toddler</a></td></tr> <tr><td><a class="shortcut" href="#">Pre-School</a></td></tr></table>
<table class="quicklink" align="left"><tr>
<th>About Us</th></tr> <tr><td><a class="shortcut" href="#">Our Team</a></td></tr> <tr><td><a class="shortcut" href="#">Our Mission</a></td></tr> <tr><td><a class="shortcut" href="#">Facilities</a></td></tr> <tr><td><a class="shortcut" href="#">Organisation</a></td></tr></table>
<table class="quicklink" align="left"><tr>
<th>Contact Us</th></tr> <tr><td><a class="shortcut" href="#">Location</a></td></tr> <tr><td><a class="shortcut" href="#">View Map</a></td></tr> <tr><td><a class="shortcut" href="#">Feedback</a></td></tr> <tr><td><a class="shortcut" href="#">Customer Support</a></td></tr></table>
<div id="copyright">&copy;Copyrights. Diapers 2013. All rights reserved.</div>
</div>
</div>
</body>
</html>
