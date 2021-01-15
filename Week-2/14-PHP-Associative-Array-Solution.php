<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Associative Arrays in PHP Solution</title>
</head>
<body>
    <?php
        /*******************************************************
         * Create an array of names and associate a color name 
         * to each
         * 
         * NOTE: The array should contain the names of more 
         * than three people and associated color
         *******************************************************/
        $colors = array('John'=>'Red', 'Jim'=>'Green', 'Jake'=>'Navy Blue', 'Jill'=>'Blue');

        /*******************************************************
         * 1. Create an echo statement contains the string 
         *    '<h4>My friend\'s favorite colors are: </h4><ul>'
         *    NOTE: Remember when using single quotes, the 
         *    apostrophe in friend's needs to be escaped with 
         *    a forward slash (\)
         * 2. Create a foreach loop that will loop through all 
         *    of the ($colors as $c => $c_value) This will 
         *    separate the associative array into their key 
         *    and value pair
         * 3. In the loop code block, create an echo statement 
         *    that creates a list of each person and their 
         *    favorite color between line item tags
         *    EXAMPLE: '<li>' . $c . '\'s favorite color 
         *    is ' . $c_value . '</li>'
         * 4. After the loop, create an echo statement that 
         *    sends the closing unordered list tag to the browser
         *******************************************************/
        echo '<h4>My friend\'s favorite colors are: </h4><ul>';
        foreach ($colors as $c => $c_value) {
            echo '<li>' . $c . '\'s favorite color is ' . $c_value . '</li>';
            }
        echo '</ul>';
        
    ?>
</body>
</html>