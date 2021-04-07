<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <h1>PHP - String Manipulation</h1> 
    <?php 
        // String Declaration and Initialiazation
        $phrase1 = 'Student who came late';
        $phrase2 = 'in class, stand outside the class.';
        $name = 'touba ijaz';
        // STRING concatenation
        // using (.) character => $phrase1 . $phrase2
        echo $phrase1 ." ". $phrase2;  // use " " for adding space bw two strings
        echo '<br>';
        echo '<hr>';
        

        // STRING transformation
        echo 'Uppercase First Letter : '.ucfirst($name).'<br>';
        echo 'Uppercase First Letter of each Word : '.ucwords($name).'<br>';
        echo 'Uppercase Letters : '.strtoupper($name).'<br>';
        echo '<br>';
        echo '<hr>';
        // function=> str_repeat(string you want to repeat, how many times you want to repeat the string)
        echo 'Repeat String : '.str_repeat("I am Touba. ",3).'';
        // funtion=> str_replace(string wanted to replace, other string wanted to replace with, whole string)
        echo '<br><h3>Replace string with the other : </h3>'.str_replace("stand","sit",$phrase1 ." ". $phrase2).'';

        
    ?> 
    <a href="index.php">Go back to Home Page</a>
    
</body>
</html>