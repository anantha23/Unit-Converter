<?php
if(!empty($_POST['logout'])){
  session_start();
  session_unset();
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body background = "maxresdefault.jpg">

    <font color= "white"><h1><center>Welcome to Unit Converter</center></h1></font>

    <br>



  </body>
</html>


<?php

function kilosTopounds($kilos)
{
  if($kilos > 0.0)
  {
    echo $pounds = ($kilos * 2.20462).' pounds';

  }
  else {
    echo "Invalid Number!";
  }
}


function metresToyards($metres)
{
  if($metres > 0.0)
  {
    echo ($yards = $metres * 1.09361)." yards";

  }
  else
  {
    echo "Invalid Number!";

  }
}

function celciusTofahrenheit($celcius)
{

  echo $fahr = (($celcius * 1.8) + 32)." fahrenheit";
  
  
}

echo '<form action="content.php" method="post">

<center><div><div class="inputdiv">  <font color= "white"><b><label>Kilos:</label></b></font> <br> <input type="Number" name ="kilo"></div></center>
<center><div><div class="inputdiv"><input type="submit" value=submit></div></div></center>
<br>
<center><div><div class="inputdiv">  <font color= "white"><b><label>Metres:</label></b></font> <br>  <input type="Number" name ="metres"></div></center>
<center><div><div class="inputdiv"><input type="submit" value="submit"></div></div><center>
<br>
<div><div class="inputdiv">  <font color= "white"><b><label>Celcius:</label></b></font> <br>  <input type="Number" name ="celcius"></div>
<div><div class="inputdiv"><input type="submit" value="submit"></div></div>



</form>';

?>

<br>


<div style="background-color: yellow;border: 10px solid orange">



<?php

if(!empty($_POST['kilo'])){
  kilosTopounds($_POST['kilo']);
}

echo "<br>=================================================================================<br>";


if(!empty($_POST['metres'])){
  metresToyards($_POST['metres']);
}

echo "<br>=================================================================================<br>";


if(!empty($_POST['celcius'])){
  celciusTofahrenheit($_POST['celcius']);
}

?>

</div>

<br><br><br>

<?php


echo '<center><div><form method="post"> <input type="submit" value=LOGOUT name="logout" style="font-weight:900; width:500px; height:30px"> </form></div></center>'







 ?>
