<?php # pagina principal
$page_title = 'main page';
include ('includes/header.html');
?>

<h1>Please Login</h1>
<?php
	if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}
?>
<!--display form-->
<form action="login.php" method="post">
	<p>Email Address: <input type="text" name="email" size="20" maxlength="60" /> </p>
	<p>Password: <input type="password" name="pass" size="20" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Login" /></p>
</form>
<?php
include ('includes/footer.html');
?>