
<?php require('controler/controler_frontend.php'); 


//displayReading();


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'displayReading') 
    {
        displayReading();
    }
}
else 
{
    homepage();
}


