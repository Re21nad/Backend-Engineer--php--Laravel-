<!-- Answer 6: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
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

    </style>
</head>
<body>
    <h1>Prime Numbers</h1> <!-- Header of this page --> 
    <div class="container">
        <div class="output">
            <?php
                // Define the isPrimeNum() function to check if the number is prime or not
                function isPrimeNum($num) {

                    switch ($num) {
                        case $num == 2: // 2 is a prime number
                            return true;
                        case $num <= 1:
                            return false;
                        case $num % 2 == 0: // Eliminate even numbers
                            return false;
                    }
                    
                    // Check for factors from 2 to number/2
                    for ($i = 2; $i <= $num/2; $i++) {
                        if ($num % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }

                // Define the primes() function to display all prime numbers in range
                function primes($start, $end) {
                    $primes = array();
                    for ($i = $start; $i <= $end; $i++) {
                        if (isPrimeNum($i)) {
                            $primes[] = $i;
                        }
                    }

                    // Display the prime numbers
                    echo "<p>Prime numbers between $start and $end are: " . implode(", ", $primes) . "\n</p>";
                }

                // Create the range for prime number
                $start = 10;
                $end = 50;
                Primes($start, $end);
                
            ?>
        </div>
    </div>


</body>
</html>