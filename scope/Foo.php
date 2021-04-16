<?php
    
    
    class Foo {
        
        public static $a;
        
        function __construct() {
            echo "Foo()";
        }
    
        function __destruct() {
            echo "~Foo()";
        }
    }
