<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEV</title>
</head>
<body>
    <!-- html comment -->
    <h1>Learning PHP Programming</h1>
    <br/>

    <h2>Follow the link to navigate the page</h2>
        <ul>
            <li><a href="ifstatement.php">If Statement</a></li>
            <li><a href="switchstatement.php">Switch Statement</a></li>
            <li><a href="forloop.php">For Loop</a></li>
            <li><a href="whiledowhileloop.php">Do While Loop</a></li>
        </ul>

    <?php
    // Single line comment in PHP
    /* 
        multiple line comment in php
    */ 
    echo "Lets start learning PHP";
    echo '<br/>';
    echo "Keep Going, Keep Going!";
    echo '<br/>';
    ?>

    <?php 

        // declare variable
        $name = 'RK Varun';
        $age = 22;

        //echo variable
        echo $name;
        echo "<h1>My Name is: ".$name. ' </h1>';
        echo "<h1>My Age is: ".$age. ' </h1>';

        

    ?>

</body>
</html>