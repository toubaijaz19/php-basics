<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>
<body>
    <h1>Arrays - PHP</h1>
    <?php 
        // VARIABLES
        $num =10;
        // ARRAYS
        $numbers = array(1,2,3,4,5,6,7,67,4,2,89,76,42,12,9,3);

        // How to count array's elements
        $size = count($numbers);
        echo '<p>numbers array have '.$size.' elements</p>';

        // Printing the Array
        echo '<p>numbers array:</p>';
        for ($i=0; $i < count($numbers) ; $i++) { 
            # code...
            echo '<p>'.$numbers[$i].'</p>';
        }
        // accessing specific index's value
        // array's index starting from 0 to n-1
        echo '<p>Value at index 5 : '.$numbers[5].'</p>';
    ?>
    <a href="index.php">Go back to Home Page</a>
    
</body>
</html>