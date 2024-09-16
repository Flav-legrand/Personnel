<?php
// Configuration de la connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "Mefl-g19#";
$dbname = "fiche_renseignement";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Préparer et lier
$stmt = $conn->prepare("INSERT INTO fiche_renseignement (nom, prenom, situation_matrimoniale, date_naissance, lieu_naissance, adresse, telephone, email, date_embauche, fonction, formation, personne_contacter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssss", $nom, $prenom, $situation_matrimoniale, $date_naissance, $lieu_naissance, $adresse, $telephone, $email, $date_embauche, $fonction, $formation, $personne_contacter);

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$situation_matrimoniale = $_POST['situation'];
$date_naissance = $_POST['date'];
$lieu_naissance = $_POST['lieu'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$date_embauche = $_POST['date-embauche'];
$fonction = $_POST['fonction'];
$formation = $_POST['formation'];
$personne_contacter = $_POST['contacter'];

// Exécuter la requête
if ($stmt->execute()) {
    echo "Nouveau record créé avec succès";
    header("Location: fichederenseignement.php");
} else {
    echo "Erreur: " . $stmt->error;
}

// Fermer la connexion
$stmt->close();
$conn->close();
?>
