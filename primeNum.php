<!-- Answer 6: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
<?php
    // Function to check if a number is prime
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        if ($number == 2) {
            return true; // 2 is a prime number
        }
        if ($number % 2 == 0) {
            return false; // Eliminate even numbers
        }
        // Check for factors from 3 to sqrt(number)
        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Function to find and display all prime numbers in a given range
    function findPrimesInRange($start, $end) {
        $primes = array();
        for ($i = $start; $i <= $end; $i++) {
            if (isPrime($i)) {
                $primes[] = $i;
            }
        }

        // Display the prime numbers
        echo "Prime numbers between $start and $end are: " . implode(", ", $primes) . "\n";
    }

    // Example usage:
    $start = 10;
    $end = 50;
    findPrimesInRange($start, $end);
?>

</body>
</html>