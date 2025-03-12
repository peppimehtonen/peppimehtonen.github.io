<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = htmlspecialchars($_POST["name"]);
    $sahkoposti = htmlspecialchars($_POST["email"]);
    $viesti = htmlspecialchars($_POST["message"]);

    $vastaanottaja = "peppi.mehtonen@gmail.com";
    $aihe = "Uusi yhteydenotto verkkosivulta";
    $viestiSisalto = "Nimi: $nimi\n";
    $viestiSisalto .= "Sähköposti: $sahkoposti\n";
    $viestiSisalto .= "Viesti:\n$viesti";

    $headers = "From: $sahkoposti";

    if (mail($vastaanottaja, $aihe, $viestiSisalto, $headers)) {
        echo "Viesti lähetetty onnistuneesti!";
    } else {
        echo "Viestiä ei voitu lähettää.";
    }
}
