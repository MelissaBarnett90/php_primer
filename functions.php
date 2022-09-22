<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>
    <h1>Functions</h1>
    
    <?php
        //defining a function

        function writeMessage(){
            echo 'You are a good peron, have a nice time!';
            
        }

        
        //calling a function
        echo writeMessage();
        echo '<hr/>';
        echo writeMessage();



    ?>
</body>
</html>