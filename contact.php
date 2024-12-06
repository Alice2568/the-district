<?php
require 'header.php'; ?>
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
   /* echo "Méthode non autorisée.";*/
}


    ?>
    <h1 class="text-center">Nous Contacter</h1>
    <hr>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="contactform">
        <div class="formulaire">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrez votre nom"><br>
                <span class="error font-weight-bold text-danger" id="nameError"><?php echo $nameErr ?></span>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" id="surname" name="surname" placeholder="Entrez votre prénom">
            </div>
        </div>
        <div class="formulaire">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email">
            </div>
            <div>
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" placeholder="Entrez votre téléphone"><br>
                <span class="error font-weight-bold text-danger"><?php echo $telErr ?></span>
            </div>
        </div>
        <div class="formulaire">
            <div>
                <label for="demande">Votre demande</label>
                <textarea id="demande" name="demande" placeholder="Décrivez votre demande ici..."></textarea>
            </div>
        </div>
        <button class="btn btn-danger " id="submit" type="submit">Envoyer</button>
    </form>
    <script>


        function validerFormulaire() {

            let valid;
            let validT;

            const nameRegex = /^[A-Za-z]+$/;
            const telephoneRegex = /^[0-9]{10}$/;


            const name = document.getElementById("name").value.trim();
            const telephone = document.getElementById("telephone").value.trim();

            if (( valid = nameRegex.test(name)) && ( validT = nameRegex.test(telephone))) {
                return true;
            document.getElementById("contactform").submit();
        } else {
            return false;

        }

}
        document.getElementById("submit").addEventListener("click", () => {validerFormulaire()});

    </script>

    <?php require "footer.php"; ?>
