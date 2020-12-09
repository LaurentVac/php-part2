<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dexercice 2 part 2 php</title>
</head>
<body>
<?php
    $age = 18;
    $gender = "Femme";
          //déclaration des conditions avec SWITCH pour homme ou femme
    switch($gender){
        case "Homme":
            echo "Vous êtes un homme";
        break;
        case "Femme":
            echo "Vous êtes une femme";
        break;
        default:
            echo "pas de valeur";

    }
    // condition if pour l'age
    if($age < 18){
        echo    " et vous êtes mineur";
    } else {
        echo " et vous êtes majeur";
    }




    
    ?>

    
</body>
</html>