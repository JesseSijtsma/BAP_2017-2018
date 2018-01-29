<html>
<body>
    <h1>u a good in da goot</h1>
</body>
</html>


<?php
    $naar = $_POST['naar'];
    $onderwerp = $_POST['onderwerp'];
    $bericht = $_POST['bericht'];
    $van = 'From: ' . 'jessesijtsma@hotmail.nl';
    mail($naar, $onderwerp, $bericht, $van);
?>