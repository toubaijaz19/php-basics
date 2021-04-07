<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statements</title>
</head>
<body>
    <?php 
      echo '<h1> Switch Statements </h1> ';
      $grade = 'A';
      switch ($grade) {
        case 'A':
            # code...
            echo '<h3 style="color:green;">Congratulations!! You have scored '.$grade.' grade.</h3>';
            break;
        case 'B':
            # code...
            echo '<h3 style="color:green;">Congrats!! You have scored '.$grade.' grade.</h3>';
            break;
        case 'C':
            # code...
            echo '<h3 style="color:green;">Well.!! You have scored '.$grade.' grade.</h3>';
            break;
        case 'D':
            # code...
            echo '<h3 style="color:green;"> You have scored '.$grade.' grade.</h3>';
            break;
        
        default:
            # code...
            echo '<h3 style="color:red;">You have Failed.</h3>';
            break;
      }
    ?>
    
    <a href="index.php">Go back to Home Page</a>
</body>
</html>