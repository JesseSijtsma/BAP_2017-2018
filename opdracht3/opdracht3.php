<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 3</title>
	<?php
    if (isset($_POST[""])){
	echo "<p>Naam:    ".$_POST["Naam"]."<br>";
	echo "Achternaam: ".$_POST["AchterNaam"]."<br>";
	echo "Leeftijd:   ".$_POST["Age"]."<br>";
	echo "Telefoon:   ".$_POST["Nummer"]."<br>";
	echo "Mail:       ".$_POST["Email"]."<br>";
	echo "Geslacht:   ".$_POST["Gender"]."</p>";
	}
	
	
?>
</head>
<p>opdracht3</p>
<link rel="stylesheet" href="css/index.css">
<body>
<form action="?" method="post">
    Naam:           <input type="text"   name="Naam"          />            <br>
    AchterNaam:     <input type="text"   name="AchterNaam"    />            <br>
    Leeftijd:       <input type="text"   name="Age"           />            <br>
    nummer:         <input type="text"   name="Nummer"        />            <br>
    Email:          <input type="text"   name="Email"         />            <br>
    Geslacht: man   <input type="radio"  name="Gender" value= "man"/>   <br>
              vrouw <input type="radio"  name="Gender" value= "vrouw"/> <br>
                    <input type="submit" value="Submit">
</form>
</body>
</html>