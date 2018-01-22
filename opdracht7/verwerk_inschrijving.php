<?php
    //POST-ARRAY UITLEZEN
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];


    //DATA IN DATABASE STOPPEN
    //CONNECTION MAKEN
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = '24583_database';

    $dbc = mysqli_connect($host, $user, $password, $database) or die ('connection failed, check your connection and try again.');

    //OPDRACHT SCHRIJVEN
    $query = "INSERT INTO nieuwsbrief VALUES (0, '$voornaam', '$tussenvoegsel', '$achternaam', '$email')";
    //OPDRACHT UITVOEREN
    $result = mysqli_query($dbc, $query) or die('Sorry, er is een fout ontstaan');
    //VERBINDING VERBREKEN
    mysqli_close($dbc);

    //BEVESTIGING
    if($result){
        echo "true";
    }

?>