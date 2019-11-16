
<?php include('process.php');?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="style1.css">
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>-->
  </head>
  <body>

      <form action="login.php" class="login-form" method="post">
        <h1>Login</h1>
         <?php include('errors.php');?>
        <div class="tb">
          <input type="text" name="username" placeholder="Username">
          <!--<span data-placeholder="Username"></span>-->
        </div>

        <div class="tb">
          <input type="password" name="password" placeholder="Password">
          <!--<span data-placeholder="Password"></span>-->
        </div>

        <input type="submit" name ="login" class="logbtn" value="Login">

        <div class="bottom-text">
          Don't have an account? <a href="signup.php" >Sign up</a>
        </div>
        <div class="home_text">
        <br/><a href="home.php"><h3>HOME</h3></a></div>
      </form>

     <!-- <script type="text/javascript">
      $(".tb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".tb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });-->

      </script>
  </body>
</html>


