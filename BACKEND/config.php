<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $bdd = new PDO("mysql:host=$servername;dbname=VisicomData", $username, $password);
 
// } catch(PDOException $e) {
//   die('Erreur;') . $e->getMessage();
// }


//La conexion a la base de données

$servername="mysql-samie.alwaysdata.net";
$username="samie";
$password="Socrate228";
$dbname="samie_viscom";

try {
    $bdd = new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "la connexion a ete bien etablie"

}
catch (PDOException $e) {
    echo "la connexion a echoué:" . $e->getMessage();
}
?>