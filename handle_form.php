<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Form Feedback</title>
</head>
<body>
<?php
# Script 2.4 - handle_form.php
//validating name
if(!empty($_REQUEST['name'])){
	$name=$_REQUEST['name'];
}else {
	$name= NULL;
	echo '<p class="error">You forgot to enter your name!</p>';
}
//validating email

if(!empty($_REQUEST['email'])){
	$email=$_REQUEST['email'];
}else {
	$email= NULL;
	echo '<p class="error">You forgot to enter your email!</p>';
}

//validating comments

if(!empty($_REQUEST['comments'])){
	$comments=$_REQUEST['comments'];
}else {
	$comments= NULL;
	echo '<p class="error">You forgot to enter your comments!</p>';
}






// validating gender
if (isset($_REQUEST['gender'])){
	$gender=$_REQUEST['gender'];
}
if ($gender == 'M') {
	echo '<b><p>Good day, Sir!</p></b>';
} else if ($gender == 'F') {
	echo '<b><p>Good day, Madam!</p></b>';
} else {
	$gender= NULL;
	echo '<p class="Gender should be either "M" or "F"!</p>';
}

if($name && $email && $gender && $comments){
	echo"<p> Thank you, <b>$name</b>, for the following comments:<br/>
	<tt>$comments</tt></p>
	<p>we will reply to you at<i>$email</i>.</p>\n";
}else{
	echo'<p class="error">please go back and fill the form completely!</p>';
}
?>
</body>
</html>