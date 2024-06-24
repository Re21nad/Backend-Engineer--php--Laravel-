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
    <style>

        /* Style Sheet of this page */
        body, html {
            height: auto;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; 
        }

        .container {
            width: 80%;
            max-width: 800px; 
            padding: 15px;
            margin: 50px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .output {
            font-family: 'Times New Roman', Times, serif;
            font-size: 16px;
            line-height: 1.6;
        }

        .output p {
            margin: 10px 0;
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <h1>Minimum and Maximum Function</h1> <!-- Header of this page -->
    <div class="container">
        <div class="output">
            <?php
                // Define the minMax() function
                function minMax($num) {

                    // Check the array numbers is empty or not
                    if (empty($num)) {
                        return 'Array numbers is empty';
                    }

                    // Define the max and min number
                    $min = $num[0];
                    $max = $num[0];

                    // Fine the max and min number in this array
                    foreach ($num as $value) {
                        if ($value < $min) {
                            $min = $value;
                        } else {
                            $max = $value;
                        }
                    }

                    // Return the max and min number
                    return ['min' => $min, 'max' => $max];
                }

                // Create an array and apply the minMax() function
                $numbers = [2, 5, 17, 2, -8, -1, 4, 10, 15, 20, (2-5), (3+4-1), (16+5*4)];
                $result = minMax($numbers); // Applying the function
                echo "<p>Minimum value: " . $result['min'] . "\n</p>"; // Output: Minimum value: -8
                echo "<p>Maximum value: " . $result['max'] . "\n</p>"; // Output: Maximum value: 36

            ?>
        </div>
    </div>

</body>
</html>