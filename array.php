<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// array unidimensional (vector)
    $a = array(1, 2, 3, 4, 5); //$a = array(1, 2, 3, 4, 5);
        echo "El valor es: " . $a[1];
echo "<br>";
    $oxo = array(array('x', ' ', 'o'),
            array('o', 'o', 'x'),
            array('x', 'o', ' '));
        echo "El valor es: " . $oxo[0][1];

echo "<br>";
    $irreg = array(array(1, 2, 3),
            array(4, 5),
            array(6, 7, 8, 9));
        echo "El valor es: " . $irreg[0][1];
?>
</body>
</html>
