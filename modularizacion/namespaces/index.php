<?php 

require("logic/CreateMichis.php"); 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michis</title>
</head>
<body>
    <ul>
        <h2>Michis Disponibles:</h2>
        <li><span><b><?= $mrmichi->getName() ?></b></span> Dice: <?= $mrmichi->sayMeow() ?></li>
        <li><span><b><?= $sancio->getName() ?></b></span> Dice: <?= $sancio->sayMeow() ?></li>
        <li><span><b><?= $trufas->getName() ?></b></span> Dice: <?= $trufas->sayMeow() ?></li>
        <br>
        <h2>Michis Adoptados:</h2>
        <li><span><b><?= $paraAdopt->getName() ?></b> </span> Fue adoptado por: <?= $paraAdopt ->getAdopted_by() ?></li>
        <li><span><b><?= $paraAdopt2->getName() ?></b> </span>Fue adoptado por: <?= $paraAdopt2->getAdopted_by() ?></li>
        <li><span><b><?= $paraAdopt3->getName() ?></b> </span>Fue adoptado por: <?= $paraAdopt3->getAdopted_by() ?></li>
    </ul>
</body>
</html>