<?php
session_start();

// If form data is submitted, save it to session
if (!empty($_POST['bank_name']) && !empty($_POST['account_holder']) && !empty($_POST['account_number']) && !empty($_POST['branch'])) {
    $_SESSION['bank_name'] = $_POST['bank_name'];
    $_SESSION['account_holder'] = $_POST['account_holder'];
    $_SESSION['account_number'] = $_POST['account_number'];
    $_SESSION['branch'] = $_POST['branch'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Bank Details Storage & Display</title>
<style>
  body {
    font-family: Arial, sans-serif;
    max-width: 700px;
    margin: auto;
    padding: 20px;
  }
  h1 {
    text-align: center;
  }
  form {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
  }
  label {
    display: block;
    margin-top: 10px;
  }
  input[type="text"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
  }
  button {
    margin-top: 15px;
    padding: 10px 15px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
  }
  button:hover {
    background-color: #0056b3;
  }
  .details {
    margin-top: 30px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
  }
  @media(max-width: 600px) {
    body {
      padding: 10px;
    }
  }
</style>
</head>
<body>
<h1>Bank Details: Input & Display</h1>

<!-- Form to input bank details -->
<form method="POST" action="">
  <label for="bank_name">Bank Name:</label>
  <input type="text" id="bank_name" name="bank_name" required />

  <label for="account_holder">Account Holder:</label>
  <input type="text" id="account_holder" name="account_holder" required />

  <label for="account_number">Account Number:</label>
  <input type="text" id="account_number" name="account_number" required />

  <label for="branch">Branch:</label>
  <input type="text" id="branch" name="branch" required />

  <button type="submit">Save Details</button>
</form>

<div class="details">
  <h2>Stored Bank Details:</h2>
  <?php
  if (isset($_SESSION['bank_name'])) {
      echo "<table>";
      echo "<tr><th>Bank Name</th><td>" . htmlspecialchars($_SESSION['bank_name']) . "</td></tr>";
      echo "<tr><th>Account Holder</th><td>" . htmlspecialchars($_SESSION['account_holder']) . "</td></tr>";
      echo "<tr><th>Account Number</th><td>" . htmlspecialchars($_SESSION['account_number']) . "</td></tr>";
      echo "<tr><th>Branch</th><td>" . htmlspecialchars($_SESSION['branch']) . "</td></tr>";
      echo "</table>";
  } else {
      echo "<p>No bank details stored yet. Please fill the form above.</p>";
  }
  ?>
</div>
</body>
</html>