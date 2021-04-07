<?php
    
    
    use PHPUnit\Framework\TestCase;
    require_once "../classes/MyFirstClass.php";
    
    class MyFirstClassTest extends TestCase {
        
        function testDeclaredClasses() {
            $my_classes = get_declared_classes();
            self::assertTrue(in_array('MyFirstClass', $my_classes));
        }
        
        function testCalculateSquareReturnsNaNIfNull () {
            $myClass = new MyFirstClass();
            self::assertTrue(is_nan($myClass->calculateSquare(null)));
        }
        
        function testCalculateSquareReturnsSquareOfNegativeNumber () {
            $myClass = new MyFirstClass();
            self::assertEquals(4, $myClass->calculateSquare(-2));
        }
        
        function testCalculateSquareReturnsSquareOfPositiveNumber () {
            $myClass = new MyFirstClass();
            self::assertEquals(4, $myClass->calculateSquare(2));
        }
        
        function testCalculateSquareReturnsSquareOfZero () {
            $myClass = new MyFirstClass();
            self::assertEquals(0, $myClass->calculateSquare(0));
        }
    }
