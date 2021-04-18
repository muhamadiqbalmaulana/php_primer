<?php 
    $title = "String";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>

    <?php
        //Contenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "Indra nakamura";
        echo $phrase1 . ", named iqbal maulana ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        // String transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: ' . strtoupper($name).'<br/>';
        echo 'Lower case: ' . strtolower("THIS WAS ALL AUPPERCASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a', 10). '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 10)). '<br/>';
        // Returns NULL
        // echo 'get position of string: '. strpos($combine,'z').<br/>;
        echo 'Find Character "I": ' . strchr($name, 'I'). '<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r'). '<br/>';
        echo 'Find Character "a": ' . strchr($name, 'a'). '<br/>';
        echo 'Find Character "k": ' . strchr($name, 'k'). '<br/>';

        echo 'Find Length od String: ' . strlen($name).'<br/>';

        echo 'Without Trim: '. "A" . " B C D " . "E". '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E". '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E". '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E". '<br/>';

        echo ' Replace string with another'. str_replace("stand", "sit", $phrase2 ). '<br/>';

    ?>
<?php require 'includes/footer.php'?>