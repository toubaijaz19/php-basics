<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Whhile/do While Loops</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php 
        $num = 1;
        // Pre-Condition LOOP
        // First Check condtion then do
        while ($num <= 10) {
            # code...
            echo '<h5>I AM NUMBER '.$num.'.</h5>';
            $num++;
        }
        echo '<h4>LOOP EXIT</h4>';
    ?>

    <h1>Do While Loop</h1>
    <?php 
        // Post-Condition LOOP 
        // First do then check condition
        do {
            # code...
            echo '<h5>I AM NUMBER '.$num.'.</h5>';
            $num++;
        } while ($num <= 10);
    ?>
    <a href="index.php">Go back to Home Page</a>

</body>
</html>