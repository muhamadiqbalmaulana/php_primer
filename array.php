<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php'
?>
        <h1><?php echo $title ?></h1>
        <?php 
            //a variable
            $num = 3;

            // an array
            // Only one datatype
            $numbers = array (1,2,3,4.5,6,7,8,9,101,5,121,23,31,56,124,67,123,98,913);
            // YOu can access the value in a subscript of the array using index.
            echo $numbers[5];

            echo "<p>$numbers[9]</p>";
            $size = count($numbers);
            echo "<p>Array Number is size : $size</p>";

            for($count = 0; $count < $size; $count++){
                echo "<p>$numbers[$count]</p>";
            }
        ?>
<?php require 'includes/footer.php'?>