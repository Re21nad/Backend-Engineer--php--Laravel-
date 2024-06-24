<!-- Answer 4: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary</title>
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
    <h1>Decimal to Binary</h1> <!-- Header of this page -->
    <div class="container">
        <div class="output">

            <?php
                // Define the decToBin() class
                function decToBin($num) {

                    // Define the variable to store the binary number
                    $binary = "";

                    // Convert the decimal num to binary num if the num is greater than 0
                    while ($num > 0) {
                        
                        $binary = ($num & 1) . $binary;

                        // Right shift the number by 1
                        $num = $num >> 1;
                    }

                    // Check if the number is 0 or not then return the binary num
                    return $binary ? $binary : '0';
                }

                // Try using this array
                $decimal = [25, 32, 50, 130, 200, 500];

                for ($i = 0; $i < count($decimal); $i++) {
                    echo "<p>The binary representation of $decimal[$i] is:</p>";
                    echo "<p style='color: red'>". decToBin($decimal[$i]) ."\n</p>";
                }
                
            ?>

        </div>
    </div>
    
</body>
</html>