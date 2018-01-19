<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 3</title>
</head>
<p>opdracht3</p>
<link rel="stylesheet" href="css/index.css">
<body>
<form action="?" method="post">
    Naam:           <input type="text" name="Naam">   <br>
    AchterNaam:     <input type="text" name="AchterNaam">   <br>
    Leeftijd:       <input type="text" name="age">    <br>
    nummer:         <input type="text" name="nummer"> <br>
    Email:          <input type="text" name="Email">  <br>
    Geslacht: man   <input type="radio" name="Man">   
              vrouw <input type="radio" name="Vrouw"> <br>
                    <input type="submit" value="Submit">
</form>
<?php
    if (isset($_POST[""])){
	echo "Naam: ".$_POST["Naam"]."<br>";
	echo "Achternaam: ".$_POST["AchterNaam"]."<br>";
	echo "Leeftijd: ".$_POST["age"]."<br>";
	echo "Telefoon: ".$_POST["nummer"]."<br>";
	echo "Mail: ".$_POST["Email"]."<br>";
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