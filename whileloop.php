<?php
    $title = "While loop";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        $nilai = 1;
        // Infinite Loop
        // While ($nilai < 10;)
        // echo '<p>IAM LEES THAN 10!)</p>'
        // }
        // Pre-Condition Loop
        While ($nilai < 10){
            echo '<p>IAM LEES THAN 10!</p>';
            $nilai++;
        }
        echo 'EXIT LOOP!';
        
    ?>
<?php require 'includes/footer.php'?>