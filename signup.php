<?php
include "connection.php";

// Message à afficher après traitement
$message = "";

// Traitement des données du formulaire lors de la soumission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["username"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["signUpUserPass"];
    $terms = isset($_POST["signUpTerms"]) ? 1 : 0;

    // Validation des données du formulaire
    if (empty($nom) || empty($email) || empty($mot_de_passe) || !$terms) {
        $message = "Tous les champs sont obligatoires et vous devez accepter les conditions d'utilisation.";
    } else {
        // Hashage du mot de passe
        $hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        try {
            // Préparation et exécution de la requête
            $stmt = $bdd->prepare("INSERT INTO Utilisateur (nom, email, mot_de_passe) VALUES (?, ?, ?)");
            $stmt->execute([$nom, $email, $hashed_password]);

            // Vérifier si l'inscription a réussi
            if ($stmt->rowCount() > 0) {
                // Redirection vers la page de connexion
                header("Location: signin.html");
                exit(); // Assurez-vous de terminer le script après la redirection
            } else {
                $message = "Erreur lors de l'inscription. Veuillez réessayer.";
            }
        } catch (PDOException $e) {
            $message = "Erreur : " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
 
</head>
<body>
    <?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>
