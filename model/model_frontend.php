<?php

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=domotique;charset=utf8', 
            'root', 
            'root',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
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


function getSensorList()
{
    $db = dbConnect();
    $sqlQuery = "SELECT * FROM `sensorList` ";
    $sql = $db->prepare($sqlQuery);
    $sql->execute();
    $sensorList = $sql->fetchAll();

    return $sensorList;
}

function dbAddNewSensor()
{
    $db = dbConnect();
    $sqlQuery = "INSERT INTO sensorlist (id, name, ipAddress, port, isEnable, status, updateFreq, type) VALUES (NULL, :name, :ip_address, :port, :is_enable, :status, :updateFreq, :type)";

    $sql = $db->prepare($sqlQuery);
    $sql->execute([ 'name'=> 'exterieur',
                    'ip_address' => '10.10.10.10',
                    'port' => '10003',
                    'is_enable' => '0',
                    'status' => '0',
                    'updateFreq' => '600',
                    'type' => 'pdcm']);
}


   