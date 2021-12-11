<?php

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=domotique;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}




function getAirQuality()
{
    $db = dbConnect();
    $sqlQuery = "SELECT * FROM `air_quality` WHERE sensor_name=:sensor_nane ORDER BY time DESC LIMIT 0,1";
    $air_quality_statement = $db->prepare($sqlQuery);
    $air_quality_statement->execute([
            'sensor_nane'=>'salon']);
    $air_quality = $air_quality_statement->fetch();

    return $air_quality;
}



   