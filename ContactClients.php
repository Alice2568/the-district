<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $telephone = htmlspecialchars(trim($_POST["telephone"]));

    
    $fichier = "donnees.txt";
    $donnee = "Nom: $nom\n, Téléphone: $telephone\n, ?string $surname = null\n, ?string $email = null\n, ?string $demande = null\n) ";
    file_put_contents($fichier, $donnee, FILE_APPEND);

    echo "Les données ont été enregistrées avec succès.";
} else {
    echo "Méthode non autorisée.";
}
?>