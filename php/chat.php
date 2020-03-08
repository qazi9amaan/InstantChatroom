
<?php
  include('config.php');
  session_start();
  
  if(!isset($_SESSION['uname'])) {
      header('./index.php');
    }
?>


<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <title>Kirangle| Chatroom</title>

     <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
  </head>

<body>
    

    <div id="container">

        <div id="session-name">
        	<input type="text" value="Your Name :  <?= $_SESSION['uname'] ?>" class="fullname" disabled>
        </div>
        <div id="logout">
      <a href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
    </div>

        <div id="result-wrapper">
        	<div id="result">
        		<?php
        			include("load.php");
        		?>
        	</div>			
        </div>

      <form method='post' action="#" onsubmit="return post();" id="my_form" name="my_form">
          <div id="form-container">
          	<div class="form-text">
              	<input type="text" style="display:none" id="username" value="<?= $_SESSION['uname'] ?>">
                <input id="comment" type="text" placeholder="Enter your message here">
              	
              </div>
              <div class="form-btn">
              	<input type="submit" value="Send" id="btn" name="btn"/>
              </div>
          </div>
      </form>
  </div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  //FOR SUBMITTING ON ENTER BUTTON 
  $(document).ready(function()
      {
          $(document).bind('keypress', function(e) {
              if(e.keyCode==13){
                   $('#my_form').submit();
           $('#comment').val("");
               }
          });
    });
</script>

<script type="text/javascript">
  //posting value to aj
  function post()
  {
    var comment = document.getElementById("comment").value;
    var name = document.getElementById("username").value;
    if(comment && name)
    {
      $.ajax
      ({
        type: 'post',
        url: 'commentajax.php',
        data: 
        {
           user_comm:comment,
            user_name:name
        },
        success: function (response) 
        {
        document.getElementById("comment").value="";
        }
      });
    }
    
    return false;
  }
</script>

<script>
   function autoRefresh_div()
   {
        $("#result").load("load.php").show();// a function which will load data from other file after x seconds
    }
   
    setInterval('autoRefresh_div()', 2000);
</script>
</body>
</html>