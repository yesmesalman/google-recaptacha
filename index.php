<?php

if (isset($_POST['submit'])) {
	$url= 'https://www.google.com/recaptcha/api/siteverify';
	$privatekey= "PASTE_YOUR_SECRET_KEY";
	$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
	$data= json_decode($response);
	//Asking for response


	if (isset($data->success) AND $data->success==TRUE) {
		echo "<script>alert('Captcha box is checked');</script>";
	}
	else{
		echo "<script>alert('Check on Captcha Box');</script>";
	}
	//Checking if captcha box is checked
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Google Recaptcha</title>
</head>
<style type="text/css">
  body{
    font-size: 18px;
    padding: 60px;
    font-family: verdana;
  }
</style>
<body>

<p>After Adding the crendentials open the file using server cause it contains some PHP code.
<br>
for more code snippet like that visit <a href="https://github.com/yesmesalman" target="_blank">Github</a>
</p>
<form method="post">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<div class="g-recaptcha" data-sitekey="PASTE_YOUR_SITE_KEY"></div>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
