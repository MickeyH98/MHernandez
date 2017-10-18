<!DOCTYPE html>
<html>
  <head>
    <title>Mickey Contact</title>

    <?php require "lib/inc/headData.php"; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  </head>
  <body>

    <?php require "lib/inc/header.php"; ?>

    <div class="pageWrapper">
      <div class="contactWrapper">
        <div id="contactMe">
          <h2>Thanks for your interest!</h2>
          <h3>You may email me at mickeyh1998@gmail.com</h3>
        </div>
        <div id="contactForm">
          <h3>Contact Form</h3>
          <form id="formyForm" action="formProcess.php" method="post">

            <div class="fieldWrapper">
              <label for="name">Name:</label>
              <input type="text" name="name" id="name" required>
            </div>

            <div class="fieldWrapper">
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" required>
            </div>

            <div class="fieldWrapper">
              <label for="company">Company:</label>
              <input type="text" name="company" id="company" required>
            </div>

            <div class="fieldWrapper">
              <label for="commentquestion">Inquiry:</label>
              <input type="text" name="commentquestion" id="commentquestion" required>
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
