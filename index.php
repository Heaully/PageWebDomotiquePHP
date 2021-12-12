
<?php require('controler/controler_frontend.php'); 


//displayReading();


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'displayReading') 
    {
        displayReading();
    }
    else if ($_GET['action'] == 'sensorManagement') 
    {
        sensorManagement();
    }
    
    else if ($_GET['action'] == 'setupNewSensorPage') 
    {
        setupNewSensorPage();

//        dbAddNewSensor();
  //      displayReading();
    }
    else if ($_GET['action'] == 'addNewSensor') 
    {
        addNewSensor();
    }

    else if ($_GET['action'] == 'phpinfo') 
    {
        phpinfo();
    }
    
    else
    {
    homepage(); //ajouter une page,  page introuvable.
    }
}
else 
{
    homepage();
}


