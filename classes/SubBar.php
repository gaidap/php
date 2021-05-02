<?php
    
    
    class SubBar extends ParentFoo {
        static function getFooBar (): string {
            return self::$my_static_foo;
        }
        
        static function setFooBar (string $text) {
            self::$my_static_foo = $text;
        }
    
    }
