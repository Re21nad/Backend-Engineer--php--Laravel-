<!-- Answer 3: -->
<!-- The time complexity in this function:
        Best Case: O(n)
        Average Case: O(n)
        Worst Case: O(n) 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min_Max Num</title>
</head>
<body>
<?php
    // Define the function
    function findMinMax($array) {
        if (empty($array)) {
            throw new InvalidArgumentException("Array is empty");
        }

        // Define the max and min number
        $min = $array[0];
        $max = $array[0];

        // Fine the max and min number in this array
        foreach ($array as $value) {
            if ($value < $min) {
                $min = $value;
            }

            if ($value > $max) {
                $max = $value;
            }
        }

        // Return the max and min number
        return ['min' => $min, 'max' => $max];
    }

    // Example usage:
    $array = [3, 5, 7, 2, 8, -1, 4, 10, 12];
    $result = findMinMax($array); // Applying the function
    echo "Minimum value: " . $result['min'] . "\n"; // Output: Minimum value: -1
    echo "Maximum value: " . $result['max'] . "\n"; // Output: Maximum value: 12

?>

</body>
</html>