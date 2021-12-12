<?php
// ***********************************************
// *** SensorManagementPage.php ******************
// *********************************************** 
$title = 'Configuration des capteurs'; ?>

<?php /*
if (!isset($_POST['email']) || !isset($_POST['message']))
{
    echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}   

$email = $_POST['email'];
$message = $_POST['message'];
*/?>

<?php ob_start(); ?>

<section class="py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-md-6 offset-md-1">
                <h1>Capteur de la maison</h1>
                <h2>Liste des equipements</h2>
                <p class="btn btn-success">Capteur ajouter !</p>

            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
