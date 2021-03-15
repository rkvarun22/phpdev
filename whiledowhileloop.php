<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dev - While/Do While Loop</title>
</head>
<body>
<h1>While Loops - Pre Condition Controlled Loops </h1>

<?php
//While Loop - Pre Condition Controlled Loop
    $grade = 0;
   // while($grade < 10){
    //   echo '<p>I am less than 10..!!</p>';  
    //}   

    while($grade < 10){
        echo '<p>I am less than 10..!!</p>';
        $grade++;
    }

        echo 'Exit Loop!';
?>

<h1>D0-While Loops - Condition Controlled Loops </h1>
    <?php
    //Do-While Loop - Post condition loop
    $grade = 0;
        do{
            echo '<p>Performing Do-While Loop..!!</p>';
            $grade++;
        }while($grade < 10);
        echo 'Exit Loop!';
    ?>
    
</body>
</html>