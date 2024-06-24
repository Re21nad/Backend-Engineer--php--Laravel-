<!-- Answer 7: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Numbers</title>
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
        }

    </style>
</head>
<body>
    <h1>Palindrome</h1> <!-- Header of this page -->
    <div class="container">
        <div class="output">
            <?php
                // Define the isPalindrome() Function
                function isPalindrome($string) {
                    
                    $character = preg_replace("/[^A-Za-z0-9]/","", $string); // Remove the nun-character string
                    
                    $lowerStr = strtolower($character); // Convert it to lowercase

                    // Check if the string is equal to its reverse
                    return $lowerStr === strrev($lowerStr)? true : false;
                }

                // Create two string and check by using the isPalindrome() function
                $testString1 = "A man, a plan, a canal, Panama!";
                $testString2 = "Hello, World!";

                echo"<p>". $testString1 . " is " . (isPalindrome($testString1) ? "a palindrome." : "not a palindrome.") . "\n
                while " . $testString2 . " is " . (isPalindrome($testString2) ? "a palindrome." : "not a palindrome.") ."</p>";

            ?>
        </div>
    </div>

</body>
</html>