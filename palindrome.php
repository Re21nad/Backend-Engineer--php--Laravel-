<!-- Answer 7: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Numbers</title>
</head>
<body>
<?php
    // Function to check if a given string is a palindrome
    function isPalindrome($string) {
        // Normalize the string: remove non-alphanumeric characters and convert to lowercase
        $normalizedString = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));

        // Check if the normalized string is equal to its reverse
        if ($normalizedString === strrev($normalizedString)) {
            return true;
        } else {
            return false;
        }
    }

    // Example usage:
    $testString1 = "A man, a plan, a canal, Panama!";
    $testString2 = "Hello, World!";

    if (isPalindrome($testString1)) {
        echo "'$testString1' is a palindrome.\n";
    } else {
        echo "'$testString1' is not a palindrome.\n";
    }

    if (isPalindrome($testString2)) {
        echo "'$testString2' is a palindrome.\n";
    } else {
        echo "'$testString2' is not a palindrome.\n";
    }
?>

</body>
</html>