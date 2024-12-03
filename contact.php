<?php require 'header.php'; ?>

    <h2> Nous contacter</h2>
    <form action="contact.php">
        <fieldset>
            <legend>Nous contacter</legend>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
            <label for="emailinput">Email</label>
            <input type="text" name="email" id="emailinput">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone">
            <label for="question">Votre demande</label>
            <input type="textarea" name="question" id="question">

        </fieldset>
    </form>
    <?php require"footer.php"; ?>
</body>

</html>