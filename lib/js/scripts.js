$("#errorButton").click(function(){
  $(".errorMessageWrapper").css("transform", "translateX(100vw)");
})

$("#successButton").click(function(){
  $(".successMessageWrapper").css("transform", "translateX(100vw)");
})

$(document).on("load", loadProjects());

$(window).resize(function(){
  loadProjects();
});


function loadProjects(){
  if($(window).width() >= 1200){ //desktop view

    //disable links
    $("#ecommerce-car-dealership-link").removeAttr("href");
    $("#number-guessing-game-link").removeAttr("href");
    $("#facebook-comment-app-link").removeAttr("href");
    $("#blackjack-card-game-link").removeAttr("href");
    $("#mysql-db-calls-link").removeAttr("href");

    $(".showHideButton").click(function(){
      //change button text
      if($(this).text() == "Show Preview"){
        $(this).text("Hide Preview");
      }else {
        $(this).text("Show Preview");
      }
      //show/hide iframe
      if($(this).siblings("iframe").height() == 600){
        $(this).siblings("iframe").css("height", "0px");
      }else {
        $(this).siblings("iframe").css("height", "600px");
      }

    })
  }else { //tablet/phone view
    //enable links
    $("#ecommerce-car-dealership-link").attr("href", "http://mhernandez.road2hire.ninja/MickeysImports/");
    $("#number-guessing-game-link").attr("href", "http://mhernandez.road2hire.ninja/numbergame/");
    $("#facebook-comment-app-link").attr("href", "http://mhernandez.road2hire.ninja/reactfacebook/");
    $("#blackjack-card-game-link").attr("href", "http://mhernandez.road2hire.ninja/Insane/insane.php");
    $("#mysql-db-calls-link").attr("href", "http://mhernandez.road2hire.ninja/PHPFormChallenges/Challenge1/");
  }
}

//onclick links for projects desktop view
$(".ecommerce-car-dealership-fullButton").click(function(){
  window.open('http://mhernandez.road2hire.ninja/MickeysImports/', '_blank');
})

$(".number-guessing-game-fullButton").click(function(){
  window.open('http://mhernandez.road2hire.ninja/numbergame/', '_blank');
})

$(".facebook-comment-app-fullButton").click(function(){
  window.open('http://mhernandez.road2hire.ninja/reactfacebook/', '_blank');
})

$(".blackjack-card-game-fullButton").click(function(){
  window.open('http://mhernandez.road2hire.ninja/Insane/insane.php', '_blank');
})

$(".mysql-db-calls-fullButton").click(function(){
  window.open('http://mhernandez.road2hire.ninja/PHPFormChallenges/Challenge1/', '_blank');
})
