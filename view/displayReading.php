<?php $title = 'Domotique OFM'; ?>
<?php ob_start(); ?>



<section class="py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-md-6 offset-md-1">
                <h1>Domotique </h1>
                <p></p>
                <?php  ?>
                <p>Niveau de CO2 :
                    <?php echo $air_quality['co2']; ?> 
                    PPM (dernière lecture à : 
                    <?php echo $air_quality['time']; ?>
                    )
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="../img/maison_1.jpg" alt="John Doe" width="50%">
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>

