<?php 
    $title = "Index";
    include 'includes/header.php'
?>
        <!-- Basic HTML -->
        <h1><?php echo $title ?></h1>
        <br/>
        <?php
            //Printing HTML using echo
            echo 'Hello PHP!';
            echo '<br/>';
            echo 'Second Line';
            echo '<br/>';
       
            // declare variable
            $name = 'Indra Nakamura';
            $age = 21;
            // echo variable
            echo $name;
            echo '<h1>My name is : '.$name.' </h1>';
            echo '<h1>My age is : '.$age.' </h1>';
            // Echo using double quotes and interpolation
            echo "<h1>My name is : $name </h1>";
        ?>
<button type="button" class="btn btn-dark">CLICK ME!</button>
<?php require 'includes/footer.php'?>