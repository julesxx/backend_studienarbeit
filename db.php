
<?php
$db = new mysqli("localhost", "root", "", "db_studienarbeit");

if (mysqli_connect_errno()) {
    printf("Verbindung fehlgeschlagen: %s\n", mysqli_connect_error());
    exit();
}



?>
