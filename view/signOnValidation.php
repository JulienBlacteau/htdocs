<?php
 ob_start();
session_start();
// Récupération du pseudo dans l'URL
$pseudo = $_GET['pseudo'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation d'inscription</title>
</head>
<body>

    <div class="container-fluid d-flex h-100 characterBackground">
        <div class="row align-self-center w-100">
            <div class="col-4 mx-auto auth-container">
                <h3>Congratulations ! <?php echo $pseudo ?></h3>
                <p>You're a new Discordingator</p>
                <p>Thanks to join us.</p>
                <a href="/index.php?action=login" class="btn btn-primary mt-3">Return to login</a>
                </btn>
            </div>
        </div>
    </div>

</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>