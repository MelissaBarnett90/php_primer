<?php 
     $title = "Index";
    include 'includes/header.php'
?>



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

<?php require 'includes/footer.php' ?>