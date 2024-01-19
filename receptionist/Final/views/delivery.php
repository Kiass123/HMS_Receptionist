<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delivery Order Form</title>
    <link rel="stylesheet" type="text/css" href="astyle.css">
</head>
<body>
	<h1>Delivery Order Form</h1>
	<form action="../controlers/deliveryCheck.php" method="POST" id="delivery-form">
		<label for="date">Sending date:</label>
		<input type="date" id="date" name="date" required><br><br>
		
		<label for="name">Receiver Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		
		<label for="address">Receiver Address:</label>
		<input id="address" name="address" required><br><br>
		
		<label for="phone">Phone:</label>
		<input type="number" id="phone" name="phone" required><br><br>
		
		<label for="package_weight">Package Weight (in kg):</label>
		<input type="number" id="package_weight" name="package_weight" min="0" required><br><br>

                        <select name="c">
                        <option value="Pathao">Pathao</option>
                        <option value="RedX">RedX</option>
                        <option value="Ecourier">Ecourier</option>
                        <option value="Steadfast">Steadfast</option>
                        
                        </select> 
                        <br>
                        <select name="payment">
                        <option value="Bikas">Bikas</option>
                        <option value="COD">COD</option>
                        <option value="Card">Card</option>
                        <option value="Bank">Bank</option>
                        
                        </select> 
                        <br>

		
		<input type="submit" value="Submit" name ="dsubmit" id="submit">
        <a href="../views/Display_Delivery.php"> <input type="button" name="edit" value="View" class="edit"> </a> <br>
	</form>
    <script>
		const form = document.getElementById("delivery-form");
		const nameInput = document.getElementById("name");
		const addressInput = document.getElementById("address");
		const phoneInput = document.getElementById("phone");
		const packageWeightInput = document.getElementById("package_weight");

		form.addEventListener("submit", (event) => {
			

			if (!isValidPhone(phoneInput.value)) {
				event.preventDefault();
				alert("Please enter a valid phone number");
			}

			if (!isValidPackageWeight(packageWeightInput.value)) {
				event.preventDefault();
				alert("Please enter a valid package weight");
			}
		});



		function isValidPhone(phone) {
			const regex = /^\d{11}$/;
			return regex.test(phone);
		}

		function isValidPackageWeight(packageWeight) {
			return packageWeight >= 1;
		}
	</script>
</body>
</html>
