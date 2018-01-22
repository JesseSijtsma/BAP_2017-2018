<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inschrijven</title>
</head>
<body>
    <h1>inschrijven</h1>
    <a href="index.php">Klik hier om terug te gaan</a><br>
    <form method="post" action="verwerk_inschrijving.php">
        <label>Voornaam:<br><input type="text" name="voornaam"></label> <br><br>
        <label>Tussenvoegsel:<br><input type="text" name="tussenvoegsel"></label><br><br>
        <label>Achternaam:<br><input type="text" name="achternaam"></label><br><br>
        <label>Email:<br><input type="email" name="email"></label><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>