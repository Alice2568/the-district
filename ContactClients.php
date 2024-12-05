<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $telephone = htmlspecialchars(trim($_POST["telephone"]));

    
    $fichier = "donnees.txt";
    $donnee = "Nom: $nom, Téléphone: $telephone, ?string $surname = null, ?string $email = null, ?string $demande = null) ";
    file_put_contents($fichier, $donnee, FILE_APPEND);

    echo "Les données ont été enregistrées avec succès.";
} else {
    echo "Méthode non autorisée.";
}

?>