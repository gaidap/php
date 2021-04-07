<?php
    
    
    class MyFirstClass {
        
        function calculateSquare ($number): float|int {
            if ($number === null) {
                return NAN;
            }
            return $number * $number;
        }
    
    }
