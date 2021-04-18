<?php
    $title = "Functions";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        function tulispesan(){
            echo "You are really a nice person, Have a nice time! <br/>";}

            /* Calling a function */
            tulispesan();

            echo "<hr/>";

            tulispesan();

            /* Functions with parameters */

        function addFunctions($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is : $sum <br/>";
        }
        /* Pass by reference - use ampersand in parameter */
        function changeNum($num){
            $num = $num + 10;
            // $num+= 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }
        $num = 500;
        addFunctions(10, 20);
        addFunctions(10, $num);
        addFunctions('10', "50");

        changeNum($num);
        echo $num . '<br/>';
        
        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';
    ?>
<?php require 'includes/footer.php'?>