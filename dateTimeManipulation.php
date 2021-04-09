<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Date/Time Manipulation</title>
</head>
<body>
    <h1>PHP - Date/Time Manipulation</h1>

    <?php 
        $todayDate = getdate();
        // function=> getdate() returns an array containing 3 elements - mday, mon and year
        echo "Date today is : ".$todayDate['mday'].'/'.$todayDate['mon'].'/'.$todayDate['year'].'<br>';
        
        // date() fucntion convert time() into readable format
        print date(('m/d/y G:i:s<br>'),time()). '<br>';
    ?>
    
    <a href="index.php">Go back to Home Page</a>
</body>
</html>