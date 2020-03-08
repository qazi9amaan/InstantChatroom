// Hiding the register box
 $(document).ready(function(){
      $(".register-box").hide();    
      $("#show").click(function(){
      $(".login-box").hide();
          $(".register-box").fadeIn();
      });
    $("#hide").click(function(){
      $(".login-box").fadeIn("slow");
          $(".register-box").hide();
      });
  });