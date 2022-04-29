<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "filmovi";
// Kreiranje konekcije
$conn = new mysqli($server, $username, $password,$database);
//postavljanje collation-a
mysqli_set_charset($conn,'utf8');
// Provjera konekcije connection
if ($conn->connect_error) {
   die("Konekcija nije uspjela: " . $conn->connect_error);
}
