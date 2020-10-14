<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays in PHP Solution</title>
</head>
<body>
    <?php 
        //Use the following arrays for this exercise
        $colors = ['White', 'Yellow', 'Blue', 'Red', 'Green', 'Black',
                'Brown', 'Azure', 'Ivory', 'Teal', 'Silver', 'Purple',
                'Navy blue', 'Pea green', 'Gray', 'Orange', 'Maroon',
                'Charcoal', 'Aquamarine', 'Coral', 'Fuchsia', 'Wheat',
                'Lime', 'Crimson', 'Khaki', 'Hot pink', 'Magenta', 'Olden',
                'Plum', 'Olive', 'Cyan'];
        $numbers = [1, 2, 3, 4, 5 , 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];
        $namesAges = ['Matt'=>24,
                    'John'=>32, 
                    'Jane'=>23,
                    'Nick'=>43,
                    'Becky'=>38];

        /*******************************************************
         * Uncomment each of the following sections one at a time
		 * to see the results.
         *******************************************************/
        
        /*
        echo '<h3>Sorting the $colors Array in Ascending order (alphabetically)</h3>';
        sort($colors);
        foreach ($arr1 as $x ) {
                echo $x . "<br>";
            }
        */

        /* 
        echo '<h3>Sorting the $numbers Array in Descending order (largest to smallest)</h3>';
        rsort($numbers);
        foreach ($arr1 as $x ) {
                echo $x . "<br>";
            } 
        */

        /* 
        echo '<h3>Sorting the value of the $namesAges Array in Ascending order (smallest to largest)</h3>';
        asort ($namesAges);
        foreach ($arr1 as $x => $x_val) {
                echo $x . ' ' . $x_val . "<br>";
            }
        */

        /* 
        echo '<h3>Sorting the key of the $namesAges Array in Ascending order (smallest to largest)</h3>';
        ksort ($namesAges);
        foreach ($arr1 as $x => $x_val) {
                echo $x . ' ' . $x_val . "<br>";
            }
        */

        /* 
        echo '<h3>Sorting the value of the $namesAges Array in Descending order (largest to smallest)</h3>';
        arsort ($namesAges);
        foreach ($arr1 as $x => $x_val) {
                echo $x . ' ' . $x_val . "<br>";
            }            
        */
        
        /* 
        echo '<h3>Sorting the key of the $namesAges Array in Descending order (smallest to largest)</h3>';
        ksort ($namesAges);
        foreach ($arr1 as $x => $x_val) {
                echo $x . ' ' . $x_val . "<br>";
            }
        */
	?>
	
</body>
</html>