<?php
 ob_start();
session_start();

$pseudo = $_GET['pseudo'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign On Validation</title>
    </head>
    <body>

        <div class="container-fluid d-flex h-100 characterBackground">
            <div class="row align-self-center w-100">
                <div class="col-4 mx-auto auth-container">
                    <h3>Welcome on Discoding!</h3>
                    <p>Your pseudo is : <?php echo $pseudo ?></p>
                    <p>Thank you for joining us .</p>
                </div>
            </div>
        </div>
        
    </body>
</html>
<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>