<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>This is my first Php website</h1>
    <?php
    define('PI',3.14);
    echo "hello world! printed using PHP<br>";
    for($i=1;$i<=10;$i++)
    {
        echo "2 X".$i." = ".$i*2;
        echo "<br>";
    }

    $string = "this is string";
    echo var_dump($string)."<br>";
    echo PI;

    ?>

</body>
</html>