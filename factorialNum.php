<!-- Answer 2: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
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
    <h1>Factorial Numbers</h1>
    <div class="container">
        <div class="output">
            <?php
                // Define the factorial() function 
                function factorial($num) {
                    // Check if the number is 0 or 1 and applying the factorial function more times
                    return $num < 2 ? 1 : ($num * factorial($num-1));
                }
                
                // For testing with these numbers
                $numbers = [2, 4, 16, 24, 50, 100];

                for ($i = 0; $i < count($numbers); $i++) {
                    echo "<p>The fuctorial number of $numbers[$i] is:</p>";
                    echo "<p style='color: red'>". factorial($numbers[$i]) ."\n</p>";
                }

            ?>
        </div>
    </div>

</body>
</html>