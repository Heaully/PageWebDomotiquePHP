<?php $title = 'Domotique OFM'; ?>


<?php ob_start(); ?>
<main>
    <section class="py-5">
      	<div class="container">
	        <div class="row gy-4">
	         	<div class="col-12 col-md-6 offset-md-1">
		            <h1>Domitique, la maison intelligente</h1>
		            <h2>Bienvenue sur ma page :)</h2>
		            <p>Ce site affiche différente signaux de la maison : concentration de CO2 et de COV, température, humidité relative, etc. Les mesures sont mise à jours chaque 5 minutes.</p>
		            
		            <a class="btn btn-dark" href="/?action=displayReading" role="button">Qualité de l'air</a>
					<a href=”mon lien linkedin” target=”_blank”>
    					<i class="bi bi-linkedin"></i>
					</a>
	         	
	         	</div>
	          	<div class="col-12 col-md-4">
	            	<img src="../img/maison_1.jpg" alt="John Doe" width="50%">
	          	</div>
	        </div>
      	</div>
    </section>
</main>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
