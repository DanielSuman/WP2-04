<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
    $runners[0] = "Martin Kokeš";
    $runners[1] = "Ondřej Čábelka";
    $runners[2] = "Filip Dubček";
    $runners[3] = "Alexandr Dulovec";
    $runners[4] = "Martin Hruška";
    $runners[5] = "Jaroslav Kašák";
    $runners[6] = "Jaroslav Melichar";
    $runners[7] = "Matěj Pošík";
    $runners[8] = "Zuzana Sahulková";
    $runners[9] = "Nicolas Jan Sefzig";
    $runners[10] = "Pavla Vobořilová";
 ?>
   <h1>Běžci v pořadí</h1>
    <ol>
    <?php
    for ($i=0; $i < 10; $i++) { 
        echo "<li>$runners[$i]</li>";
    }
    ?>
    </ol>
</body>
</html>