<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dev - Switch Statement</title>
</head>
<body>
    <h1>Switch Statement</h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">You are A Superstar</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">You Did Well..</h2>';
                break;
            default:
                echo '<h2 style="color: red">You have just Passed..</h2>';
                break;
        }
    
    ?>
    
</body>
</html>