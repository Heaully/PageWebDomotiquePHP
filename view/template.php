<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>

    
         <title><?= $title ?></title>
        
    </head>
        
    <body>
        <?php require('view/header.php'); ?>

        <?= $content ?>
    </body>



    <footer class="bg-ligth fixed-bottom text-center text-lg-start mt-auto">
      <div class="text-center p-3">
        © 2021 Copyright:
        <a class="text-ligth" href="https://google.ca">Olivier Fortin-Moreau</a>
      </div>
    </footer>
</html>