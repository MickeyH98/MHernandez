<?php
// echo "Everything: <br>";
// var_dump($_POST);
//
// echo "<br><br>Name: <br>";
// echo $_POST["name"];
//
// echo "<br><br>Email: <br>";
// echo $_POST["email"];
//
// echo "<br><br>Company: <br>";
// echo $_POST["company"];
//
// echo "<br><br>Inquiry: <br>";
// echo $_POST["commentquestion"];

$name = $_POST["name"];
$email = $_POST["email"];
$company = $_POST["company"];
$inquiry = $_POST["commentquestion"];

// recipient
$to = 'mickeyh1998@gmail.com';

// Subject
$subject = 'Portfolio Inquiry from ' . $name;

// Message
$message = '
  Portfolio Inquiry
  Name: ' . $name . '
  Email: ' . $email . '
  Company: ' . $company . '
  Inquiry: ' . $inquiry . '
';

// Mail it
mail($to, $subject, $message);


?>
