<?php

require('model/model_frontend.php');

function displayReading()
{
    $air_quality=getAirQuality();
    require('view/displayReading.php');
}

function homePage()
{
    require('view/homePage.php');

}

function sensorManagement()
{
    $sensorList=getSensorList();
    //$sensorList="banane";
    require('view/sensorManagementPage.php');

}


function setupNewSensorPage()
{
     require('view/setupNewSensorPage.php');

}


function addNewSensor()
{

    <?php

    if (!isset($_POST['sensor_name']) || 
        !isset($_POST['ip_address']) || 
        !isset($_POST['port']) || 
        !isset($_POST['is_enable']) || 
        !isset($_POST['updateFreq']) || 
        !isset($_POST['sensor_type']))
    {
        require('view/addNewSensorPage.php');
    }
    else
    {
       // $email = $_POST['email'];
    //    $message = $_POST['message'];
        require('view/addNewSensorPage.php');
    }   
}