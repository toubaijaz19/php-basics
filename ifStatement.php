<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primerv - If Statement</title>
</head>
<body>
    
    <?php 
      //   An if statements that will carry out an action against some variable value
       echo '<h1>If Statement - PHP</h1>';
       $grade = 92;
       // Simple If-Else
       if( $grade % 2 == 0 ){
           echo ''.$grade.' is even Number.';
       } else {
           echo ''.$grade.' is Odd Numbers';
       }

       // Nested If-Else
       if( $grade >= 50 ){
           echo '<h3>You scored '.$grade.' marks.</h3>';
           if( $grade > 90 ){
              echo '<h3 style="color:green;">Congratulations!! You have top the Exam.</h3>';
           } else{
              echo '<h3 style="color:green;">Congrats!! You have passed!!</h3>';
           }
        } 
       else{
            echo '<h3>You scored '.$grade.' marks.</h3>'; 
            echo '<h3 style="color:red;">Alas!! You have failed the Exam.</h3>';
        }
    ?>

    <a href="index.php">Go back to Home Page</a>


</body>
</html>