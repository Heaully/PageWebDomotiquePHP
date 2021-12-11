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
