<?php

if(!empty($_POST["submit"])){ //when form submitted

  //create shorthand variables
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $inquiry = $_POST["commentquestion"];
  $errorMessage = []; //empty array for errors to be pushed into

  //validate
  //regex for validation
  if(preg_match("/^[a-zA-Z ]+$/", $name) && //only letters
  preg_match("/\S+@\S+\.\S+/", $email) && //string@string format
  preg_match("/^[a-zA-Z ]+$/", $company) && //only letters
  preg_match("/^[a-zA-Z0-9 '.,-]+$/", $inquiry)){ //only letters + numbers

    //if validates, build email

    //recipient
    $to = 'mickeyh1998@gmail.com';

    //subject
    $subject = 'Portfolio Inquiry from ' . $name;

    //build message
    $message = '
      Portfolio Inquiry
      Name: ' . $name . '
      Email: ' . $email . '
      Company: ' . $company . '
      Inquiry: ' . $inquiry;

    //send email
    mail($to, $subject, $message);

    //create success message
    $successMessage = "<p class='successMessage'>Thanks ". $name . ", your email has been sent and I'll get back to you soon!</p>";

    //reset fields
    $name = "";
    $email = "";
    $company = "";
    $inquiry = "";

    $success = true;

  }
  else { //if not valid, check which fields are incorrect
    $success = false;
    if(!preg_match("/^[a-zA-Z ]+$/", $name)){
      array_push($errorMessage, "<p class='errorMessage'>Please enter the correct format name</p>"); //add error to errors array
    }

    if(!preg_match("/\S+@\S+\.\S+/", $email)){
      array_push($errorMessage, "<p class='errorMessage'>Please enter the correct format email</p>");
    }

    if(!preg_match("/^[a-zA-Z ]+$/", $company)){
      array_push($errorMessage, "<p class='errorMessage'>Please enter the correct format company</p>");
    }

    if(!preg_match("/^[a-zA-Z0-9 '.,-]+$/", $inquiry)){
      array_push($errorMessage, "<p class='errorMessage'>Please enter the correct format inquiry</p>");
    }

    // display errors on page by echoing into html
  }

}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mickey Contact</title>

    <?php require "lib/inc/headData.php"; ?>

  </head>
  <body>

    <?php require "lib/inc/header.php"; ?>

    <div class="pageWrapper">
      <div class="contactWrapper">
        <div id="contactMe">
          <h2>Thanks for your interest!</h2>
          <h3>You may email me at <a id="emailLink" href="mailto:mickeyh1998@gmail.com?subject=PortfolioInquiry">mickeyh1998@gmail.com</a></h3>
        </div>
        <div id="contactForm">
          <h3>Contact Form</h3>

          <div class="errorMessageWrapper">
          <?php
          if(!empty($errorMessage)){
            foreach($errorMessage as $error){
              echo $error;
            }

            echo "<button id='errorButton'>Okay</button>";
          }
          ?>
          </div>

          <div class="successMessageWrapper">
            <?php
            if($success){
              echo $successMessage;
              echo "<button id='successButton'>Okay</button>";
            }
            ?>
          </div>

          <form id="formyForm" action="contact.php" method="post">

            <div class="fieldWrapper">
              <label for="name">Name:</label>
              <input type="text" name="name" id="name" value="<?= $name ?>"required>
            </div>

            <div class="fieldWrapper">
              <label for="email">Email:</label>
              <input type="text" name="email" id="email" value="<?= $email ?>"required>
            </div>

            <div class="fieldWrapper">
              <label for="company">Company:</label>
              <input type="text" name="company" id="company" value="<?= $company ?>"required>
            </div>

            <div class="fieldWrapper">
              <label for="commentquestion">Inquiry:</label>
              <input type="text" name="commentquestion" id="commentquestion" value="<?= $inquiry ?>"required>
            </div>

            <input type="submit" value="Submit" name="submit" id="submitFormButton">

          </form>

        </div>
      </div>
    </div>

    <?php require "lib/inc/footer.php"; ?>
  </body>
</html>


<!--
* Contact page - contact form with Name, Email, Phone, Company, Comments/Questions. You may add your phone and/or mailing address if you like. To submit the form, name, phone and email are required. Use JavaScript to make sure those fields are filled in and do not submit the form if they are not. Provide error message to user instead.
-->
