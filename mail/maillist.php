<html>
<body>
    <h1>u a good in da goot</h1>
</body>
</html>


<?php
            $Subject = $_POST["onderwerp"];
            $MailTo = "24583@ma-web.nl";
            $Text = $_POST["bericht"];
            $MailFrom = "From: ".$_POST["MailFrom"];

            mail($MailTo,$Subject,$Text,$MailFrom);
?>