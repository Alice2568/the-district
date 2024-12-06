<?php // define variables and set to empty values
    $nameErr = $telErr = "";
    $name = $email = $surname = $demande = $telephone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Ce champ est obligatoire";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["telephone"])) {
            $telErr = "Ce champ est obligatoire";
        } else {
            $email = test_input($_POST["telephone"]);
        }

        if (empty($_POST["surname"])) {
            $surname = "";
        } else {
            $surname = test_input($_POST["surname"]);
        }

        if (empty($_POST["demande"])) {
            $demande = "";
        } else {
            $demande = test_input($_POST["demande"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "";
        } else {
            $email = test_input($_POST["email"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = htmlspecialchars(trim($_POST["name"]));
    $telephone = htmlspecialchars(trim($_POST["telephone"]));

    
    $fichier = "donnees.txt";
    $donnee = "Name: $name, Téléphone: $telephone, ?string $surname = null, ?string $email = null, ?string $demande = null; ";
    file_put_contents($fichier, $donnee, FILE_APPEND);

    echo "Votre demande a été enregistrée avec succés";
} else {
    echo "Méthode non autorisée.";
}


    ?>