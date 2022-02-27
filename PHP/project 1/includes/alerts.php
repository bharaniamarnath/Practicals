<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Sign Up</title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body>
<?php
$dbalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Error connecting to the database.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$fieldalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;All fields are required.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$fnamealert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Firstname is required.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$lnamealert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Lastname is required.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$genderalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Gender is not specified. Specify either 'Male' or 'Female'.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>"; 
$dobdalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Date is not specified in 'Date of Birth' field.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$dobmalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Month is not specified in 'Date of Birth' field.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$dobyalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Year is not specified in 'Date of Birth' field.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$unamealert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Username is required.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$unamecountalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Username should not be more than 15 characters.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$passalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Password is required.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$passcountalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Password should not be more than 15 characters.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$mailidalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Email ID is required.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$invalidfname = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Invalid First Name. Name cannot contain Numbers or Invalid/Special characters.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$invalidlname = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Invalid Last Name. Name cannot contain Numbers or Invalid/Special characters.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$unameexistalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Username already exists. Try a different username.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$passconfalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Password and Confirm Password did not match. Retype the fields correctly.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$invalidemail = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Invalid E-mail ID format. Enter a valid address.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$emlexistalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Email ID already registered or taken by another user. Try a different Email ID.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$regerroralert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Error in database. Registration failed.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$regconfalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Registration Success. Sign into the account with registered username and password.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$logerroralert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Login Failed. Invalid username and password. Try again.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$logemptyalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Login Failed. Enter a valid username and password. Try again.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$logdenyalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Access Denied. User not logged in.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$logoutalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;User logged out.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$useridalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;User ID is required.</img></p><input type='button' onClick=parent.location='resetpass.php' value='Back'></input>";
$noidexistalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;User ID is invalid. Try again.</img></p><input type='button' onClick=parent.location='resetpass.php' value='Back'></input>";
$newpassalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;New Password and Confirm New Password does not match.</img></p><input type='button' onClick=parent.location='newpass.php' value='Back'></input>";
$newpwfailalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Password update failed.</img></p><input type='button' onClick=parent.location='resetpass.php' value='Back'></input>";
$nwpwconfalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Password updated. Sign into the account using new password.</img></p><input type='button' onClick=parent.location='index.php' value='Back'></input>";
$emptypassalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Password and confirm password both are required. </img></p><input type='button' onClick=parent.location='newpass.php' value='Back'></input>";
$unamefailalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Invalid username or username does not exist.</img></p><input type='button' onClick=parent.location='newpass.php' value='Back'></input>";
$imagealert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Select an image file to upload.</img></p><input type='button' onClick=parent.location='imageupload.php' value='Back'></input>";
$imageulalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Profile image uploaded and updated.</img></p><input type='button' onClick=parent.location='main.php' value='Back'></input>";
$countryalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Country is not specified. Select a country.</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$contactalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Invalid contact number. Enter a valid 10 digit contact number.</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$aboutalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;'About Me' field can contain only 150 characters or below. Describe shortly.</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$proupderralert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Profile update failed</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$proupdconalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Profile updated. Check the profile.</img></p><input type='button' onClick=parent.location='main.php' value='Back'></input>";
$invalidpfname = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Invalid First Name. Name cannot contain Numbers or Invalid/Special characters.</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$invalidplname = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Invalid Last Name. Name cannot contain Numbers or Invalid/Special characters.</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$pfnamealert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Firstname is required.</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$plnamealert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Lastname is required.</img></p><input type='button' onClick=parent.location='updateprofile.php' value='Back'></input>";
$posterralert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Post message can contain only 100 characters.</img></p><input type='button' onClick=parent.location='main.php' value='Back'></input>";
$msgerralert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Error in posting message. Try again.</img></p><input type='button' onClick=parent.location='main.php' value='Back'></input>";
$delpostalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Error in deleting posting message.</img></p><input type='button' onClick=parent.location='main.php' value='Back'></input>";
$frndaddalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Friend added to the profile.</img></p><input type='button' onClick=parent.location='friends.php' value='Back'></input>";
$frndfailalert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Error in adding friend.</img></p><input type='button' onClick=parent.location='friends.php' value='Back'></input>";
$frndexstalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;The user is already a friend.</img></p><input type='button' onClick=parent.location='friends.php' value='Back'></input>";
$nofrndsalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;No friends added yet. Find people.</img></p><input type='button' onClick=parent.location='people.php' value='Find People'></input>";
$deldenyalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Cannot delete post. Only posted user can delete it.</img></p><input type='button' onClick='history.go(-1)' value='Back'></input>";
$photoulalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Photo uploaded. Check the album.</img></p><input type='button' onClick=parent.location='photos.php' value='View Album'></input>";
$photoalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Photo upload failed. Check if file and description is valid.</img></p><input type='button' onClick=parent.location='uploadphotos.php' value='Back'></input>";
$delpicalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Photo could not be deleted.</img></p><input type='button' onClick=parent.location='photos.php' value='Back'></input>";
$photoupdalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Photo updated. View the album.</img></p><input type='button' onClick=parent.location='photos.php' value='Back'></input>";
$photoupdfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Photo update failed.</img></p><input type='button' onClick=parent.location='photos.php' value='Back'></input>";
$puphotoulalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Photo uploaded to public album. Check the album.</img></p><input type='button' onClick=parent.location='publicphotos.php' value='View Album'></input>";
$commentalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Comment added to the photo. View photo.</img></p><input type='button' onClick=parent.location='publicphotos.php' value='Back'></input><br />";
$commfailalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Failed adding comment to the photo.</img></p><input type='button' onClick=parent.location='publicphotos.php' value='Back'></input>";
$commdelalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Comment deleted from the photo. Go back to photos.</img></p><input type='button' onClick=parent.location='publicphotos.php' value='Back'></input>";
$commdelfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Comment could not be deleted from the photo. Go back to photos.</img></p><input type='button' onClick=parent.location='publicphotos.php' value='Back'></input>";
$commdelerralert = "<p class=alert><img align='middle' src=images/alert.png align=middle>&nbsp;Comment could not be deleted from the photo. Only comment posted user can delete it.</img></p><input type='button' onClick=parent.location='publicphotos.php' value='Back'></input>";
$pbdelpicalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Photo cannot be deleted. Only posted user can delete the photo.</img></p><input type='button' onClick=parent.location='publicphotos.php' value='Back'></input>";
$emptytoalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;To/Reciever's username field is empty. Enter a username to send the message.</img></p><input type='button' onClick=parent.location='composemail.php' value='Back'></input>";
$mailsentalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Mail sent to the reciever successfully.</img></p><input type='button' onClick=parent.location='inbox.php' value='Back'></input>";
$mailfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Mail sending failed. Go back.</img></p><input type='button' onClick=parent.location='composemail.php' value='Back'></input>";
$nophotosalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;No photos added yet. Add photos.</img></p>";
$maildelalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Message deleted from inbox. Go back.</img></p><input type='button' onClick=parent.location='inbox.php' value='Back'></input>";
$maildelfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Message could not be deleted. Go back.</img></p><input type='button' onClick=parent.location='inbox.php' value='Back'></input>";
$emptyinboxalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;No messages found. Inbox is empty.</img></p>";
$frnddelalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;User removed from friend list. Go back.</img></p><input type='button' onClick=parent.location='friends.php' value='Back'></input>";
$errdelfralert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Error removing user from friend list. Go back.</img></p><input type='button' onClick=parent.location='friends.php' value='Back'></input>";
$fbacksentalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Feedback submitted successfully to webstar.</img></p><input type='button' onClick=parent.location='main.php' value='Back'></input>";
$emptysenderalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Enter the email ID of the feeback sender.</img></p><input type='button' onClick=parent.location='feedback.php' value='Back'></input>";
$fbackfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Feedback sending failed. Go back.</img></p><input type='button' onClick=parent.location='feedback.php' value='Back'></input>";
$votefalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Could not add vote to the photo. Go back.</img></p><input type='button' onClick=parent.location='feedback.php' value='Back'></input>";
$fqsalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Friend request sent to the user. Go back to people list</img></p><input type='button' onClick=parent.location='people.php' value='Back'></input>";
$fqsfalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Failed sending friend request. Go back to people list</img></p><input type='button' onClick=parent.location='people.php' value='Back'></input>";
$nofreqalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;No friend requests found.</img></p><input type='button' onClick=parent.location='friends.php' value='Friends'></input>";
$reqdelalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Friend request deleted.</img></p><input type='button' onClick=parent.location='friendrequest.php' value='Friends'></input>";
$reqdelfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Error deleting request.</img></p><input type='button' onClick=parent.location='friendrequest.php' value='Friends'></input>";
$rasalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Request already sent to the user.</img></p><input type='button' onClick=parent.location='people.php' value='Friends'></input>";
$termsalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Accept to terms and conditions to complete registration.</img></p><input type='button' onClick='history.go(-1)' value='Back'></input>";
$eventexstalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Event already exists in the calendar.</img></p><input type='button' onClick='history.go(-1)' value='Back'></input>";
$eventaddalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Event added to the calendar. Go back.</img></p><input type='button' onClick=parent.location='calendar.php' value='Back'></input>";
$eventaddfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Event could not be added to the calendar. Go back.</img></p><input type='button' onClick=parent.location'addevent.php' value='Back'></input>";
$evntdelalert = "<p class=alert><img align='middle' src=images/executed.png align=middle>&nbsp;Event deleted from the calendar. Go back.</img></p><input type='button' onClick=parent.location='calendar.php' value='Back'></input>";
$evntdelfalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Event could not be deleted from the calendar. Go back.</img></p><input type='button' onClick=parent.location='calendar.php' value='Back'></input>";
$emptyeventalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;No events added to the calendar. Add an event.</img></p><input type='button' onClick=parent.location='addevent.php' value='Add Event'></input><br />";
$noactivityalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;No activities found or selected. </img></p><br />";
$postemptyalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Post cannot be posted empty.</img></p><input type='button' onClick=parent.location='main.php' value='Back'></input>";
$nofrndphotosalert = "<p class=alert><img align='middle' src=images/warning.png align=middle>&nbsp;Friend has not added any photos yet.</img></p>";
$delpropicalert = "<p class=alert><img align='middle' src=images/failed.png align=middle>&nbsp;Photo could not be deleted.</img></p><input type='button' onClick=parent.location='imageupload.php' value='Back'></input>";
?>
</body>
</html>