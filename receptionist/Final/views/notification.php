<!DOCTYPE html>
<html>
<head>
	<title>Notification Form</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="astyle.css">
	<h1>Notification Form</h1>
	<form action="../controlers/notiCheck.php" method="POST">
		<label for="receiver">Receiver:</label>
		<select name="receiver" id="receiver" required>
			<option value="">Select Receiver</option>
			<option value="patient">Patient</option>
			<option value="doctor">Doctor</option>
		</select><br><br>

		<label for="message">Message:</label>
		<textarea id="message" name="message"  required></textarea><br><br>
		
		<input type="submit" value="Send Notification" name ="submit" id="submit">
	</form>
</body>
</html>
