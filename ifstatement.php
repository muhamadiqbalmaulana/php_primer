<?php 
    $title = "IF ELSE";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <h3 style="color: red"></h3>
    <?php
        
        //An IF statement that will carry out an action based on action basdd on the value of the variable.
        
        $grade = 30;
        // ===, == , > , < , <= , => ,
        
        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE BEEN PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE BEEN FAILED</h3>';
        }
        $nilai= 'A';
        // if-Else IF-Else
        if($nilai == 'A'){
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR</h2>';
        }
        elseif($nilai == 'B'){
            echo '<h2 style="color: yellow">YOU DID WELL</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU HAVE FAILED....</h2>';
        }
    ?>
<?php require 'includes/footer.php'?>