<!DOCTYPE html>
<html>
  <head>
    <title>Help and Support - Hospital Management System</title>
    <link rel="stylesheet" type="text/css" href="help.css">
  </head>

  <body>
    <header>
      <h1>Help and Support</h1>
    </header>
    <section id="faq">
      <h2>Frequently Asked Questions</h2>
      <form id="faq-form" action="../controlers/helpCheck.php" method="POST">
        <label for="category">Select a Category:</label>
        <select id="choice" name="choice">
          <option value="account">Account</option>
          <option value="appointments">Appointments</option>
          <option value="payments">Payments</option>
        </select>
        <br>
        <label for="question">Enter Your Question:</label>
        <textarea id="question" name="question"></textarea>
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>


      <h2>Request account recovery </h2>
      <form id="data" action="../controlers/helpCheck.php" method="POST">
      <input id="name" type="text" name="name" value=""></td>
      <input id="username" type="text" name="username" value="">
      <input id="password" type="password" name="password" value="">
        <button type="submit" name="submit">Submit</button>
      </form>
      <div id="user"></div>

      <script>
  // AJAX function to send form data to receipt.php
  document.getElementById("data").addEventListener("submit", function(event) {
    event.preventDefault();
    var formData = new FormData(event.target);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "info.php");
    xhr.onload = function() {
      document.getElementById("user").innerHTML = this.responseText;
    };
    xhr.send(formData);
  });


</script>
    </section>
  </body>
</html>
