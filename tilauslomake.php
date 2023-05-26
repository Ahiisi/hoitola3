<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tilaajaNimi = $_POST["tilaajaNimi"];
  $osoite = $_POST["osoite"];
  $puhnro = $_POST["puhnro"];
  $saajaNimi = $_POST["saajaNimi"];
  $valittuHoito = $_POST["valittuHoito"];
  $valittuSumma = $_POST["valittuSumma"];
  $vapaaTeksti = $_POST["vapaaTeksti"];

  // You can perform additional validation or processing here

  // Save the form data to a file or send it via email
  $file = fopen("contact_data.txt", "a");
  fwrite($file, "Tilaaja Nimi: " . $tilaajaNimi . "\n");
  fwrite($file, "Osoite: " . $osoite . "\n");
  fwrite($file, "Puhelinnumero: " . $puhnro . "\n");
  fwrite($file, "Saajan Nimi: " . $saajaNimi . "\n");
  fwrite($file, "Valittu Hoito: " . $valittuHoito . "\n");
  fwrite($file, "Valittu Summa: " . $valittuSumma . "\n");
  fwrite($file, "Vapaa Teksti: " . $vapaaTeksti . "\n\n");
  fclose($file);

  echo "Thank you for submitting the form!";
}
?>