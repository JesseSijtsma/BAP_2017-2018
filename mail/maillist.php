<?php
session_start(); 

$mail_ontv = 'jessesijtsma@hotmail.nl'; 


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    if (empty($_POST['naam']))
        $naam_fout = 1;
    
    if (function_exists('filter_var') && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
        $email_fout = 1;
    
    if (!empty($_SESSION['antiflood']))
    {
        $seconde = 20; 
        $tijd = time() - $_SESSION['antiflood'];
        if($tijd < $seconde)
            $antiflood = 1;
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($antiflood) || empty($_POST['naam']) || !empty($naam_fout) || empty($_POST['mail']) || !empty($email_fout) || empty($_POST['bericht']) || empty($_POST['onderwerp']))) || $_SERVER['REQUEST_METHOD'] == 'GET')
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (!empty($naam_fout))
            echo '<p>Uw naam is niet ingevuld.</p>';
        elseif (!empty($email_fout))
            echo '<p>Uw e-mailadres is niet juist.</p>';
        elseif (!empty($antiflood))
            echo '<p>U mag slechts &eacute;&eacute;n bericht per ' . $seconde . ' seconde versturen.</p>';
        else
            echo '<p>U bent uw naam, e-mailadres, onderwerp of bericht vergeten in te vullen.</p>';
    }

    
    echo '<form method="post" action="' . $_SERVER['REQUEST_URI'] . '" />
  <p>
  
      <label for="naam">Naam:</label><br />
      <input type="text" id="naam" name="naam" value="' . (isset($_POST['naam']) ? htmlspecialchars($_POST['naam']) : '') . '" /><br />
      
      <label for="mail">E-mailadres:</label><br />
      <input type="text" id="mail" name="mail" value="' . (isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '') . '" /><br />
      
      <label for="onderwerp">Onderwerp:</label><br />
      <input type="text" id="onderwerp" name="onderwerp" value="' . (isset($_POST['onderwerp']) ? htmlspecialchars($_POST['onderwerp']) : '') . '" /><br />
      
      <label for="bericht">Bericht:</label><br />
      <textarea id="bericht" name="bericht" rows="8" style="width: 400px;">' . (isset($_POST['bericht']) ? htmlspecialchars($_POST['bericht']) : '') . '</textarea><br />
      
      <input type="submit" name="submit" value=" Versturen " />
  </p>
  </form>';
}

else
{
    
    $datum = date('d/m/Y H:i:s');

    $inhoud_mail = "===================================================\n";
    $inhoud_mail .= "Ingevulde contact formulier " . $_SERVER['HTTP_HOST'] . "\n";
    $inhoud_mail .= "===================================================\n\n";

    $inhoud_mail .= "Naam: " . htmlspecialchars($_POST['naam']) . "\n";
    $inhoud_mail .= "E-mail adres: " . htmlspecialchars($_POST['mail']) . "\n";
    $inhoud_mail .= "Bericht:\n";
    $inhoud_mail .= htmlspecialchars($_POST['bericht']) . "\n\n";

    $inhoud_mail .= "Verstuurd op " . $datum . " via het IP adres " . $_SERVER['REMOTE_ADDR'] . "\n\n";

    $inhoud_mail .= "===================================================\n\n";

   
    $headers = 'From: ' . htmlspecialchars($_POST['naam']) . ' <' . $_POST['mail'] . '>';

    $headers = stripslashes($headers);
    $headers = str_replace('\n', '', $headers); 
    $headers = str_replace('\r', '', $headers); 
    $headers = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $headers)); 

    $_POST['onderwerp'] = str_replace('\n', '', $_POST['onderwerp']); 
    $_POST['onderwerp'] = str_replace('\r', '', $_POST['onderwerp']);
    $_POST['onderwerp'] = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $_POST['onderwerp'])); 

    if (mail($mail_ontv, $_POST['onderwerp'], $inhoud_mail, $headers))
    {
        
        $_SESSION['antiflood'] = time();

        echo '<h1>Het contactformulier is verzonden</h1>
      
      <p>Bedankt voor het invullen van het formulier. u word zo snel mogelijk geholpen!.</p>';
    }
    else
    {
        echo '<h1>Het contactformulier is niet verzonden</h1>
      
      <p><b>Mijn excuses.</b> Het contactformulier kon niet verzonden worden.</p>';
    }
}
?>