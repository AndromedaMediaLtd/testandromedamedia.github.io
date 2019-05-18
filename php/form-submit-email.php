<HTML>
<head></head>
	<body>
<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$subject = "Automated Email Forwarding Service";

	$mailTo = "info@andromedamedial.co.uk";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html");
}
		?>
		
		</body>
	
	</HTML>