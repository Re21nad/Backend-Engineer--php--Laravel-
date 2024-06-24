<!-- Answer 2: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
        // Define the factorial function and has one parameter
        function factorial($num) {

            // Check if the number is 0 or 1
            if ($num < 2) {
                return 1;
            // Applying the factorial function more times
            } else {
                return ($num * factorial($num-1));
            }
        }
        
        // For test the function
        echo factorial(4). " \n";
        echo factorial(20). " \n";
        echo factorial(100);
    ?>

</body>
</html>