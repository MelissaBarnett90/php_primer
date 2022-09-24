<?php 
     $title = "Functions";
    include 'includes/header.php'
?>


    <h1>Functions</h1>
    
    <?php
        //defining a function

        function writeMessage(){
            echo 'You are a good person, have a nice time!';
            
        }

        
        //calling a function
        echo writeMessage();
        echo '<hr/>';
        echo writeMessage();

        /* Functions and paremeters*/

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "<br/> The Sum of $num1 and $num2 is: $sum <br/>";

        }

        function changeNum(&$num){
            //$num = $num + 100;
           $num+= 100;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;

        }



        echo '<hr/>';
        $num = 500;
        addFunction(10, 20);
        addFunction(10, $num);
       
        echo "Num1 is: $num"; 
        addFunction('10', "50");
        echo '<hr/>';

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';








    ?>
    
    <?php require 'includes/footer.php' ?>