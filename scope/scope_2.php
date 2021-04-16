<?php
    require_once "Foo.php";
    require_once "Bar.php";
    session_start(); // <- Will that work? Yes it will.
    $bar_page = $_SERVER[ 'PHP_SELF' ];
    
    $session_exists = isset($_SESSION[ 'bar' ]);
    $session_id_exists = isset($session_id_exists);
    $foo_exists = isset($foo);
    $bar = new Bar();
   
    if ( isset($_POST[ 'submit' ]) ) {
//        session_start(); // <- Will that work? No it won't! You have to start session before any output.
        $_SESSION[ 'bar' ] = 'test';
        Bar::$b = 'test';
//        header("Location: scope_2.php");
    }
    $static_bar = Bar::$b;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
<div>
    <?php
        echo "<pre><div>" . 'Is there a foo? ' . ($foo_exists ? 'yes there is!' : 'na ah ah. no there isn\'t') . "</div></pre>"
    ?>
    <?php
        echo "<pre><div>" . 'Is there a session? ' . ($session_exists ? 'yes there is!' : 'na ah ah. no there isn\'t') . "</div></pre>"
    ?>
    <?php
        echo "<pre><div>" . 'Is there a static bar? ' . (isset($static_bar) ? 'yes there is!' : 'na ah ah. no there isn\'t') . "</div></pre>"
    ?>
    <div>
        <pre><?php echo $bar_page; ?></pre>
        <div>
            <pre>BAR: <?php var_dump($bar); ?></pre>
        </div>
    </div>
    <a href="scope_1.php">Back to one...</a>
</div>
</body>
</html>
