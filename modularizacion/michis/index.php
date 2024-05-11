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
        <li><span><b><?= $mrmichi->getName() ?></b></span> Dice: <?= $mrmichi->sayMeow() ?></li>
        <li><span><b><?= $sancio->getName() ?></b></span> Dice: <?= $sancio->sayMeow() ?></li>
        <li><span><b><?= $trufas->getName() ?></b></span> Dice: <?= $trufas->sayMeow() ?></li>
    </ul>
</body>
</html>