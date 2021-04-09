<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>

    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>

    <?php 
    // Printing to HTML using echo in php
    echo 'Hello PHP!';
    // you can echo HTML tags in php
    echo '<br>';
    echo 'Second Line in PHP <br>';
    // declaring variables 
    $name = 'Touba Ijaz';
    $age = 21;
    // printing string to HTML using PHP - two method
    echo '<h1>My Name is : '.$name.' </h1>'; //String Concatenation method
    echo "<h1>My Name is : $name </h1>"; //String Interpolation method
    echo '<h2>My Age is : '.$age.'</h2>';
    ?>

    <h1>Follow the following links to the page example</h1>
    <ul>
       <li><a href="ifStatement.php">If Statements</a></li>
       <li><a href="switchStatement.php">Switch Statements</a></li>
       <li><a href="forLoop.php">For Loops</a></li>
       <li><a href="whileDoWhileLoop.php">While & do While Loops</a></li>
       <li><a href="array.php">Simple Arrays</a></li>
       <li><a href="stringManipulation.php">String Manipulation</a></li>
       <li><a href="dateTimeManipulation.php">Date and Time Manipulation</a></li>
       <li><a href="simpleFunctions.php">Simple Functions</a></li>
    </ul>
    
</body>
</html>