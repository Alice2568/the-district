<?php
require 'header.php'; ?>
</head>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h1>Nous Contacter</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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

            const nameRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s'-]+$/;
            const telephoneRegex = /^[0-9]{10}$/;


            const name = document.getElementById("name").value.trim();
            const telephone = document.getElementById("telephone").value.trim();

            if (( valid = nameRegex.test(name)) && ( validT = nameRegex.test(telephone))) {
                return true;
            document.getElementById("Contactform").submit();
        } else {
            return false;

        }

}
        document.getElementById("submit").addEventListener("click", () => {validerFormulaire()});

    </script>
    <?php require "footer.php"; ?>
</body>

</html>