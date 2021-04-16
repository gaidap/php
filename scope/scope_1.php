<?php
    require_once "Foo.php";
    require_once "Bar.php";
    session_start();
    $foo_page = $_SERVER[ 'PHP_SELF' ];
    $foo = new Foo();
    $bar_exists = isset($bar);
    $session_exists = isset($_SESSION['bar']);
    $session_id_exists = isset($session_id_exists);
//    $bar = new Bar();
//    Bar::$b = 'test';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
<form action="scope_2.php" method="post">
    <?php
        echo "<pre><div>" . 'Is there a bar? ' . ($bar_exists ? 'yes there is!' : 'na ah ah. no there isn\'t') . "</div></pre>"
    ?>
    <?php
        echo "<pre><div>" . 'Is there a session? ' . ($session_exists ? 'yes there is!' : 'na ah ah. no there isn\'t') . "</div></pre>"
    ?>
    <?php
        echo "<pre><div>" . 'Is there a session id? ' . ($session_id_exists ? 'yes there is!' : 'na ah ah. no there isn\'t') . "</div></pre>"
    ?>
    <div>
        <pre><?php echo $foo_page; ?></pre>
    </div>
    <div>
        <pre>FOO: <?php var_dump($foo); ?></pre>
    </div>

    <input type="submit" name="submit" value="click me">
</form>
</body>
</html>

