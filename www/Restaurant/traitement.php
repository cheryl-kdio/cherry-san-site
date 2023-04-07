<?php
header("Access-Control-Allow-Origin: *");
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "Regis_984";
$dbname = "livraison_repas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$jeu = $_POST['jeu'];
$date = $_POST['date'];
$heure = $_POST['heure'];

// Préparation et exécution de la requête SQL
$stmt = $conn->prepare("INSERT INTO reservations (Nom, Email, Jeu, Date, Heure) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nom, $email, $jeu, $date, $heure);
$stmt->execute();

// Fermeture de la connexion
$stmt->close();
?>