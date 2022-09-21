<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PP Primer - Index</title>
</head>
<body>
    <h2>Follow each link to the page example</h2>
    <u1>
        <li> <a href="array.php">Simple Array Printouts</a></li>
        <li> <a href="forloop.php">Simple for loops</a></li>
        <li> <a href="whiledowhileloop.php">Simple While and Do While Loops</a></li>
        <li> <a href="ifstatement.php">Simple If Statement</a></li>
        <li> <a href="switchstatement.php">Simple Switch Statement</a></li>
    </u1>

    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>
     
    <?php
    //Printing to HMTK using echo
        echo "Hello PHP!";
        echo "<br/>";
        echo "Second Line";
           

    ?>

    <?php 
    //declare variable
        $name = "Melissa Barnett";
        $age = "24";
        echo "</br>";
        //print variable
        echo $name;
        echo '<h1>My name is:  '.$name.' </h1>';
        echo '<h1>My name is:  '.$age.' </h1>';
        
        echo "<h1>My Name is: $name </h1>";
    ?>



</body>
</html>