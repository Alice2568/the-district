<?php
require_once 'ContactClients.php';
if (isset($_POST["name"],$_POST["telephone"])) {
    $contact = new Contact($_POST["name"], $_POST["telephone"]);
    if ($contact->isValide()){

    } else {
        $errors = "Formulaire invalide";
    }
}
require 'header.php'; ?>
</head>
<body>
    <h1>Nous Contacter</h1>
    <?php if ($errors): ?>
        <div class="alert alert-danger">
            <?= $errors ?>
        </div>
        <?php endif; ?>
    <form action="" method="post">
        <div class="form-group">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrez votre nom" class="form-control" required>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" id="surname" name="surname" placeholder="Entrez votre prénom" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" class="form-control">
            </div>
            <div>
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" placeholder="Entrez votre téléphone" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div>
                <label for="demande">Votre demande</label>
                <textarea id="demande" name="demande" placeholder="Décrivez votre demande ici..." class="form-control"></textarea>
            </div>
        </div>
        <button class="btn btn-danger " type="submit">Envoyer</button>
    </form>
    <?php require"footer.php"; ?>
</body>
</html>
