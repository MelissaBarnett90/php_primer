<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statement</title>
</head>
<body>
    <h3 style="color: green"></h3> 

    <!-- If statement to carry out action based on value of varibale -->
    <?php
        echo '<h2>If Statement</h2>';

        $grade = 50;
        // ===, ==. >, <=, >=
        if($grade <= 50){
            echo '<h3 style="color: blue">You Have Passed</h2>';
        }
        else{
            echo '<h3 style="color: red">You Have Passed</h2>';

        }
        $grade = 'A';
        //if-else if-else
        if($grade == 'A'){
            echo "<h2>You are a super star!!</h2>";
        }
        elseif($grade =='B'){
            echo "<h2>Nice!!</h2>";
        }
        else{
            echo "<h2 style='color: red'>You have failed.</h2>";
        }
    ?>



</body>
</html>