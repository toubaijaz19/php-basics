<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - FOr Loop</title>
</head>
<body>
    <h1>For Loop</h1>
    <?php 
        // Calculating factorial using For Loop
        $num = 5;
        $temp = $num;
        $factorial = 1;
        for ($i=0; $i < $num ; $i++) { 
            # code...
            $factorial = $factorial * $temp;
            $temp--;
        }
        echo "<h> Factorial of $num : $factorial</h3><br>";
    ?>
    <br>
    <a href="index.php">Go back to Home Page</a>
</body>
</html>