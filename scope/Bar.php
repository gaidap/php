<?php
    
    
    class Bar {
    
        public static $b;
        
        function __construct() {
            echo "Bar()";
        }
        
        function __destruct() {
            echo "~Bar()";
        }
    
    }
