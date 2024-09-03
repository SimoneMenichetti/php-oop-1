<?php
// importiamo Movie.php
require_once __DIR__ . '/Model/Movie.php';
// importiamo db.php
require_once __DIR__ . '/Data/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
    <link href="Style/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach($Movies as $Movie):?>
                <div class='col-md-4 mb-4'>
                    <?php $Movie->printMovieAllDetails(); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>