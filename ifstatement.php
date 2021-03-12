<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dev - If statement</title>
</head>
<body>
<?php 

    //An If statement that will carry out an action based on the value of the variable

    echo "<h1>If Statement</h1>";
    

    $grade = 59;
    //Comaprasion operator - ===, ==, >, <, >=, <=
    if($grade >= 50){
       echo '<h3 style="color: green">You Have Passed</h3>';
    }else{
        echo '<h3 style="color: red">You Have Failed</h3>';
    } 

    //if-Else If-else 
    $grade = 'C';

    if($grade == 'A'){
        echo '<h2 style="color: green">you are a Superstar</h2>';
    } 
    elseif ($grade == 'B'){
        echo '<h2 style="color: blue">You did Well!</h2>';
    }
    else{
        echo '<h2 style="color: red">You are just Passed..</h2>';
    }

?>
    
</body>
</html>