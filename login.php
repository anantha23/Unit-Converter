<?php
ob_start();

echo "<font color = 'yellow'><h1><center>Unit Converter</center></h1></font>";




  if(isset($_SESSION["username"]))
  {

      echo("User: ".$_SESSION["username"]);
      echo("<a href='logout.php'><button>Logout</button></a>");

  }

  if(isset($_POST["username"]) && isset($_POST["password"]))
  {

      $username = $_POST["username"];
      $password = $_POST["password"];
      $_SESSION["username"] = $_POST["username"];
      header("Location: content.php");
      ob_enf_fluch();
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <style>


  .labeldiv{width: 100pt;}
  .inputdiv{width: 100pt;}

  </style>
  <body background= "thinkstockphotos-481493125-100638928-large.jpg">

     <br><br>
    <form method="post">
    <fieldset>
    <center><div><div class="labeldiv"><font color= "yellow"><label><b>Username:</b></label></font> <input type="text" name ="username"></div></center>
    <br>
    <center><div><div class="inputdiv"><font color= "yellow"><label><b>Password:</b></label></font> <br>  <input type="password" name ="password"></div></center>
    <br>
    <center><div><div class="inputdiv"><input type="submit" value="login"></div></div><center>

  </fieldset>

    </form>
  </body>
</html>
