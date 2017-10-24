<!DOCTYPE html>
<html>
  <head>
    <title>Mickey Biography</title>

    <?php require "lib/inc/headData.php"; ?>

  </head>
  <body>

    <?php require "lib/inc/header.php"; ?>

    <div class="pageWrapper">
      <div class="shellfieWrapper">
        <img id="shellfie" src="lib/img/shellfie.jpg" alt="Mickey">
      </div>

      <div class="bioSec earlyChildhood">
        <div class="bioSecHeader">
          <h2>Childhood</h2>
        </div>
        <div class="bioSecContent">
          <p>Born in Mexico on May 9th, 1998</p>
          <p>Brought to the USA as a 1 year old</p>
        </div>
      </div>
      <div class="bioSec education">
        <div class="bioSecHeader">
          <h2>Education</h2>
        </div>
        <div class="bioSecContent">
          <p>Lake Wylie Elementary School</p>
          <p>Southwest Middle School</p>
          <p>Renaissance Olympic High School</p>
        </div>
      </div>
      <div class="bioSec hobbies">
        <div class="bioSecHeader">
          <h2>Hobbies</h2>
        </div>
        <div class="bioSecContent">
          <p>Learning cool code tricks</p>
          <p>TV/Movies</p>
          <p>Video Games</p>
        </div>
      </div>
      <div class="bioSec lifeGoals">
        <div class="bioSecHeader">
          <h2>Life Goal</h2>
        </div>
        <div class="bioSecContent">
          <p>Travel the world</p>
        </div>
      </div>
    </div>

    <?php require "lib/inc/footer.php"; ?>

  </body>
</html>
