<?php $title = "Ajout d'un nouveau capteur"; ?>


<?php ob_start(); ?>

<section class="my-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-md-6 offset-md-1">
                <h1>Ajout d'un capteur</h1>
                <h2>Configuration</h2>
                <p> 
                   definir ici les parametres a entrer</p>
                <p>
                    
                <form method="post" action="/?action=addNewSensor">
                    <p>
                        <label for="sensor_name">Nom du capteur :</label>
                        <input type="text" name="sensor_name" id="sensor_name" placeholder="Ex : salon" size="30" maxlength="32" autofocus required />

                        <br />
                        <label for="ip_address">Adresse IP :</label>
                        <input type="ip_address" name="ip_address" id="ip_address" value="127.0.0.1" required/>

                        <label for="port">Port :</label>
                        <input type="number" name="port" id="port" value="10001" required min="1" max="86400"/>

                        <br />

                        Etat du capteur :
                        <input type="radio" name="is_enable" value="sensor_enable" id="sensor_enable" /> <label for="sensor_enable">Activé</label>
                        <input type="radio" name="is_enable" value="sensor_disable" id="sensor_disable" checked /> <label for="sensor_disable">Désactivé</label>
                        <br />


                        <label for="updateFreq">Fréquence de lecture :</label>
                        <input type="number" name="updateFreq" id="updateFreq" value="600" min="1" max="86400"/>

                        <br />
                        <label for="sensor_type">Type de capteur:</label>
                        <select name="sensor_type" id="sensor_type">
                            <option value="test">Test</option>
                            <option value="PDCM">PDCM</option>
                            <option value="airQuality">qualité d'air</option>
                            <option value="Hygrometer">Hygrometre</option>
                        </select>
                    </p>
                    <input class="btn btn-success" type="submit" value="Envoyer" />
                    <input class="btn btn-warning" type="reset" value="Effacer" />
                </form>
                <!-- :name, :ip_address, :port, :is_enable, :status, :updateFreq, :type -->
                </p>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
