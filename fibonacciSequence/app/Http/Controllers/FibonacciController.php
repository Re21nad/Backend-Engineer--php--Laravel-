<?php

namespace App\Http\Controllers; // Define the namespace for the controller

// use Illuminate\Http\Request; // Import the Request class
use App\Http\Controllers\Controller; // Import the Controller class

// Define FibonacciController class that extends the controller
class FibonacciController extends Controller
{
    /**
     * Generate a Fibonacci sequence of a specified length.
     *
     * @param int $length
     * @return \Illuminate\Http\JsonResponse
     */

    //  Define the generateFibonacci() function and take special length
    public function generateFibonacci($n)
    {
        // If the length is 0 or less the error will be occure in json
        if ($n < 0) {
            return response()->json(['error' => 'Length must be greater than 0'], 400);
        } else if($n == 1){ // If the length is equal 1, it will return 1
            return response()->json([1]);
        } else if($n == 0){ // If the length is equal 0, it will return 0
            return response()->json([0]);
        }

        // Create variables
        $fibonacci = [];
        $num1 = 0;
        $num2 = 1;

        // Create fibonacci sequence
        $counter = 0; 
        while ($counter < $n){  
            $fibonacci[] = $num1;
            $num3 = $num1 + $num2; 
            $num1 = $num2; 
            $num2 = $num3; 
            $counter = $counter + 1; 
        } 

        // Return the sequence to print it with json
        return response()->json($fibonacci);
    }
}
