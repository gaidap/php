<?php
    
    
    use PHPUnit\Framework\TestCase;
    
    require_once "../classes/ParentFoo.php";
    require_once "../classes/SubFoo.php";
    require_once "../classes/SubBar.php";
    
    class StaticBindingsTest extends TestCase {
        function testStaticProperties() {
            self::assertEquals('static foo', SubFoo::$my_static_foo);
            SubFoo::setFooBar('static sub foo');
            self::assertEquals('static sub foo', SubFoo::$my_static_foo);
            self::assertEquals('static sub foo', SubBar::$my_static_foo);
            SubBar::setFooBar('static sub bar');
            self::assertEquals('static sub bar', SubFoo::$my_static_foo);
            self::assertEquals('static sub bar', SubBar::$my_static_foo);
            $foo = new SubFoo();
            $bar = new SubBar();
            self::assertEquals('static sub bar', $foo::$my_static_foo);
            self::assertEquals('static sub bar', $bar::$my_static_foo);
        }
    }
