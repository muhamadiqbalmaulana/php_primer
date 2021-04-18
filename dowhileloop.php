<?php 
    $title = "Do while loop";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        $grade = 0;
        do{
            echo '<p>IAM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP';
    ?>
<?php require 'includes/footer.php'?>