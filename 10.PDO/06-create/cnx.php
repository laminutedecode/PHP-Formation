<?php

$host = 'localhost';
$dbname = 'shops'; 
$username = 'root'; 
$password = ''; 

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
);

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, $options);

} catch(PDOException $e) {

    echo 'Erreur de connexion : ' . $e->getMessage();
}

?>