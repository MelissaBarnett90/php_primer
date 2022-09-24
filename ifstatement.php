<?php 
     $title = "If Statement";
    include 'includes/header.php'
?>

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
<?php require 'includes/footer.php' ?>
