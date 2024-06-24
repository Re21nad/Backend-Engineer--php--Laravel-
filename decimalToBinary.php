<!-- Answer 4: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary</title>
</head>
<body>
    
<?php
    function decimalToBinary($number) {
        if ($number == 0) {
            return "0";
        }

        $binary = "";

        while ($number > 0) {
            // Extract the least significant bit (LSB) using bitwise AND with 1
            $binary = ($number & 1) . $binary;

            // Right shift the number by 1 to process the next bit
            $number = $number >> 1;
        }

        return $binary;
    }

    // Example usage:
    $decimal = 25;
    echo "The binary representation of $decimal is: " . decimalToBinary($decimal) . "\n";
?>

</body>
</html>