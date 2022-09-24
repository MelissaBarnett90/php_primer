<?php 
     $title = "Date Time Manipulation";
    include 'includes/header.php'
?>

    <h1>Date and Time Manipulation</h1>

    <?php
        $datenow =getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday'] . '<br/>';
       // echo $datenow['mday'] . '<br/>' . $datenow['year'];
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Today's Date: " . $datenow['mon'] . '/' . $datenow['mday'] .'/' .
        $datenow['year'];

        echo time();
        echo '<hr/>';

        print date("m/d/y G.i:s<br>", time()) . '<br/>';
        echo "Today is:";
        print date("j od F Y, \a\\t g.i.a", time());
      
    ?>

<?php require 'includes/footer.php' ?>