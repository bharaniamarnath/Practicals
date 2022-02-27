$(function()
{
$("ul li:first").show();
var chkfname = /^[A-Za-z0-9_]{3,15}$/;
var chklname = /^[A-Za-z0-9_]{3,15}$/;	
var chkuname = /^[A-Za-z0-9_]{3,15}$/;
var chkmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var chkpass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
$('#email').keyup(function()
{
	var email=$(this).val();
	if(!chkfname.test(email)){
		$(this).next().show().html("Invalid Email Address");
	}
	else
	{
		$(this).next().hide();
		$("li").next("li.lastname").slideDown({duration: 'slow' easing: 'easeOutElastic'});
	}
}
);

}
)