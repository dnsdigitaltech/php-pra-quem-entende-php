<?php require "../bootstrap.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Curso de PHP devclass</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php 
                try{
                    require load();
                }catch(Exception $e){
                    echo $e->getMessage();
                }
            ?>
        </div>

    </body>
</html>