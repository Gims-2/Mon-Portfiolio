<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Confirmation d'envoi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Message reçu !</h1>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupération des données avec sécurité minimale
                $nom = htmlspecialchars($_POST['nom']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                echo "<div style='background: white; padding: 20px; border-radius: 10px; color: #333; text-align: left; margin-top: 20px;'>";
                echo "<p><strong>Nom :</strong> $nom</p>";
                echo "<p><strong>Email :</strong> $email</p>";
                echo "<p><strong>Message :</strong><br>$message</p>";
                echo "</div>";
            } else {
                echo "<p>Erreur : Le formulaire n'a pas été soumis correctement.</p>";
            }
            ?>

            <a href="index.html" class="btn">Retour au portfolio</a>
        </div>
    </section>
</body>

</html>