<?php 
     $title = "String Manipulation";
    include 'includes/header.php'
?>


    <h1>PHP String Manipulation</h1>
    <?php
        $phrase1 = "student who came late";
        $phrase2 = " in class, stand with me, ";
        $name = "Melissa Barnett";
        echo $phrase1;
        echo $phrase2;

        //using dots to join (concatenation)
        echo $phrase1 . ", named Ruth,". $phrase2;
        echo '<br/>';

        //string transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of ecah word: ' . ucwords($name).'<br/>';
        echo 'Upper Case:'. strtoupper($name).' <br/>';
        echo 'Lower Case:'. strtolower($name).' <br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        
        //sub string
        echo 'Get position of substring: ' .substr($name, 3, 5).'<br/>';
        
        echo 'Get position of string: ' .strpos($name,'a').'<br/>';

        //get position of string
        echo 'Get a Substring: ' . substr($name, 5, 10).'<br/>';
        echo 'Get a Character "M": ' . strchr($name, 'M').'<br/>';
        echo 'Get a Character "A": ' . strchr($name, 'a').'<br/>';
        echo 'Get a Character "W": ' . strchr($name, 'w').'<br/>';
        echo 'Get a Character "s": ' . strchr($name, 's').'<br/>';

        //length of string 
        echo 'Get length of string: ' .strlen($name).'<br/>';
        echo '<hr/>';   
        
        echo 'Without trim: '."A" . "B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '."A" .trim("B C D " ). "E" . '<br/>';
        echo 'Trim spaces on left: '."A" .ltrim("B C D ") . "E" . '<br/>';
        echo 'Trim spaces on right '."A" .rtrim ("B C D " ). "E" . '<br/>';
        echo '<hr/>';   

        echo 'Replace string with another: '.str_replace("stand", "JUMP",
        $phrase2 ).'<br/>';


    
    ?>
    <?php require 'includes/footer.php' ?>