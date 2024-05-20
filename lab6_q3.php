<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Rectangle</title>
</head>
<body>
    <?php
    
    function calculateArea($length, $width) {
        return $length * $width;
    }

    
    $length = 2;
    $width = 4;

    $area = calculateArea($length, $width);

    echo "<h3>The are of a rectangle with a width of $width and a length of $length is $area </h3>";
?>
    </body>
</html>
