<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        html {
            display: flex; 
            flex-direction: column; 
            font-family: 'Times New Roman', Times, serif; 
            justify-content: center; 
            align-items: center;
        }

        h1, p {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        p {
            font-size: 25px;
        }

        .container {
            display: flex; /* Enables flexbox layout */
            flex-direction: column; /* Arranges children in a column */
            align-items: center; /* Center-aligns children horizontally */
            width: 80%;
            max-width: 800px; 
            padding: 15px;
            margin: 50px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        /* Styling for columns */
        .col {
            width: 100%; /* Full width */
            display: flex; /* Flexbox layout */
            flex-direction: column; /* Column direction */
            align-items: center; /* Center-align items */
            margin-bottom: 15px; /* Spacing between rows */
        }

        /* Styling for rows */
        .row {
            width: 100%; /* Full width */
            display: flex; /* Flexbox layout */
            justify-content: center; /* Center-align items */
            margin: 5px 0; /* Vertical spacing */
        }

        /* Styling for buttons */
        button {
            padding: 10px 20px; /* Padding inside the button */
            font-size: 16px; /* Font size */
            margin: 10px; /* Margin around buttons */
            cursor: pointer; /* Pointer cursor on hover */
            background-color: bisque;
            color: black; /* Button text color */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth background color transition */
        }

        /* Button hover effect */
        button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

    </style>
</head>
<body>
    <h1>Home Page</h1>
    <p>There are all the solution in all questions</p>
    <div class="container">
        <div class="col">
            <div class="row">
                <button onclick="navigateTo('AbstractClass_vs_Interface.php')">Q1: Abstract and Interface</button>
            </div>
            <div class="row">
                <button>Q2: Recursive Factorial Function</button>
            </div>
            <div class="row">
                <button>Q3: Find Max and Min in Array</button>
            </div>
            <div class="row">
                <button>Q4: Decimal to Binary Conversion</button>
            </div>
            <div class="row">
                <button onclick="navigateTo('/fibonacci/10')">Q5: Fibonacci Sequence (Laravel Way)</button>
            </div>
            <div class="row">
                <button>Q6: Find Prime Numbers in a Range</button>
            </div>
            <div class="row">
                <button>Q7: Palindrome Check</button>
            </div>
        </div>
    </div>

    <script>
        function navigateTo(path) {
            window.location.href = path;
        }
    </script>

</body>
</html>