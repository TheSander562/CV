<?php
$mailto  = 'super-sander@live.nl';


$naam		= strip_tags($_POST['naam']);
$ondwrp		= strip_tags($_POST['ondwrp']);
$email		= strip_tags($_POST['email']);
$bericht	= strip_tags($_POST['bericht']);

$onderwerp = "[Contact formulier]";

$body = "
<br>
<p><b>Bericht</b>: $bericht</p>
<p><b>Naam</b>: $naam <br>
<p><b>Onderwerp</b>: $ondwrp <br>
<b>Email</b>: $email<br>
";

$goed = "Verzonden";
$probleem = "Probleem opgetreden";


$headers = "Van: $naam <$email> \r\n";
$headers .= "Antwoord naar: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers2 = "Van:" . $mailto;
$bericht = "<html><body>$body</body></html>";

if(empty($naam) || empty($ondwrp) || empty($email) || empty($bericht) ){

    echo "Vul het formulier volledig en goed in!";
    header("Location: http://cv.holocraftium.pe.hu");
    die();

}

else {

    if (mail($mailto, $onderwerp, $bericht, $headers)) {
        echo "$goed";
    } else {
        echo "$probleem";
    }
}

