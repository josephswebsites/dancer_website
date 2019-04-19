<<<<<<< HEAD
<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "joseph.a.grossberg@wmich.edu";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	mail($mailTo, $subject, $txt, $headers);

	header("Location: index.php?mailsend");
=======
<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "joseph.a.grossberg@wmich.edu";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	mail($mailTo, $subject, $txt, $headers);

	header("Location: index.php?mailsend");
>>>>>>> 24648a08a5f969c6d80f2d7f758847f81e301d2c
}