<?php 
     $title = "Switch Statement";
    include 'includes/header.php'
?>


    <h1>Switch Statement</h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">You are a SuperStar!!</h2>';
                break;
            case 'B':
                 echo "<h2 style='color: pink'>Nice!!</h2>";
                 break;
            default;
                echo "<h2 style='color: red'>You have failed.</h2>";
        }
    ?>
    
    <?php require 'includes/footer.php' ?>