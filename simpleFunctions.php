<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Simple Functions</title>
</head>
<body>
    <h1>PHP - Functions</h1>
    <?php
        // defining a function
        function writeMsg() {
        echo "You ara a Nice person, have a nice day!";
        }
        writeMsg(); // call the function
        echo '<hr>';


        // functions with Parameter
        function productNumbers($num1,$num2) {
            echo 'Multiplication of '.$num1.' by '.$num2.' : '.$num1*$num2.' <br>';
        }
        $n1= 10;
        $n2= 15;
        productNumbers($n1,$n2); // function call
        echo '<hr>';


        // Returning Functions
        function returnAdd($num1,$num2){
            $add = $num1 + $num2;
            return $add;
        }
        echo 'Addition of '.$n1.' and '.$n2.' : '.returnAdd($n1,$n2); // function call
        echo '<hr>';


        // change the actual variable value
        function changeValue(&$num1){ //parameter pass by reference - use ampersand
            $num1+= 12;
        }
        echo 'Before calling function changeValue(), value of n1 : '.$n1.'<br>';
        changeValue($n1);
        echo 'After calling function changeValue(), value of n1 : '.$n1.'<br>';
        
    ?>
    <a href="index.php">Go back to Home Page</a>
</body>
</html>