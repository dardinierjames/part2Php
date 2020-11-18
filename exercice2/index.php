<?php 
    $age = 20;
    $gender = 'femme';

        // if($age >= 18 && $gender == 'homme'){
        //         echo 'Vous êtes un homme et vous êtes majeur !!!';
        // }
        // else if($age >= 0 && $gender == 'homme'){
        //         echo 'Vous êtes un homme et vous êtes mineur !!!';
        // }
        // else if($age >= 18 && $gender == 'femme'){
        //         echo 'Vous êtes une femme et vous êtes majeur !!!';
        // }
        // else if($age >= 0 && $gender == 'femme'){
        //         echo 'Vous êtes une femme et vous êtes mineur !!!';
        // }
        // else{
        //         echo 'les valeurs sont fausses';
        // }   
        
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2 Part II</title>
</head>
<body>
    <div>Vous êtes
        <?php 
            if ($gender == 'homme'){
                echo ' un homme ';
            }
            else{
                echo ' une femme ';
            }
        ?>et vous êtes
        <?php 
            if ($age >= 18 || $age > 120 ) {
                echo 'majeur !!!';
            }
            else if($age >= 0 || $age < 18) {
                echo 'mineur !!!';
            }
        ?>
    </div>
    
</body>
</html>