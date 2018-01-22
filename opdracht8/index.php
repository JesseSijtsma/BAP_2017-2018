<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdracht4</title>
	    <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
  <body>
  <div id="Div1">
   <h1>Hallo</h1>
   <hr>
   <form action". . ./login php" method="get">
   <p>Inloggen:</p><br>
   <input type="text" name="Gebruikersnaam" placeholder="Gebruikersnaam">
   <br>
   <input type="password" name="wachtwoord" placeholder="wachtwoord">
   <br>
   </form>
   <br>
   <form action". . ./login.php" method="get">
   <p>lekker eten?</p><br>
   <input type="checkbox" name="pizza" value="pizza">        <p> pizza       </p> <br>
   <input type="checkbox" name="hamburger" value="hamburger"><p> hamburger   </p> <br>
   <input type="checkbox" name="spinazie" value="spinazie">  <p> spinazie    </p> <br>
   </form>
   <br>
   <form action". . ./login.php" method="get">
   <p>Keuze</p><br>
   <input type="radio" name="Keuze" value="MD">  <p>Media  </P> <br>
   <input type="radio" name="Keuze" value="GD">  <p>Game   </P> <br>
   <input type="radio" name="Keuze" value="IDK"> <p>Twijfel</p> <br>
   <input type="submit" value="Submit">
   </form>
   </div>
   <?php
   if (isset($_POST[""])){
	echo "text: ".$_POST["Gebruikersnaam"]."<br>";
	echo "password: ".$_POST["wachtwoord"]."<br>";
	echo "checkbox: ".$_POST["pizza"]     ."<br>";
	echo "checkbox: ".$_POST["hamburger"] ."<br>";
	echo "checkbox: ".$_POST["spinazie"]  ."<br>";
	}
	if (isset($_POST["Man"])){
		echo "Geslacht: Man";
	}
	
	if (isset($_POST["Vrouw"])){
		echo "Geslacht: Vrouw";
	}
   
   ?>
  </body>
</html>
