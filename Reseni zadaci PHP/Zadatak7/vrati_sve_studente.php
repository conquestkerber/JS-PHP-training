<?php
// Strana koja se izvrsava kroz AJAX posle klika na dugme Prikaz

include 'lib.php';

$studenti = vrati_sve_studente();

// Objekti se vracaju u JSON formatu da bi JQuery obrada bila jednostavna na klijentu. 
echo json_encode($studenti);
?>
