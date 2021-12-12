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
                <a class="btn btn-dark" href="/?action=setupNewSensorPage" role="button">Ajouter un capteur</a>
                <h2>Liste des equipements</h2>
                <p> 
                    allo :
                    <?php // boucle For pour chaque sensor de la liste 
                    foreach ($sensorList as $sensor) 
                    {   ?>
                        <p><?php echo $sensor['name']; ?></p>
                    <?php
//                          echo $sensorList[0]['name']; 
                 //   echo $sensorList ; 
                    }?>

                </p>
                <p>fin</p>

            </div>
            <div class="col-12 col-md-4">
                <img src="../img/maison_1.jpg" alt="John Doe" width="50%">
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
