<?php

require_once __DIR__.'/movie.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<ul>
    <li>
        <?php  echo $films->getFullmovie();   ?>
    </li>
    <li>
        <?php  echo $filmsDue->getFullmovie();   ?>
    </li>
    
</ul>
    
</body>
</html>