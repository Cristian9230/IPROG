<?php
$a = 10;
$b = 20;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "La variable \$a es la mayor.";
} elseif ($b >= $a && $b >= $c) {
    echo "La variable \$b es la mayor.";
} else {
    echo "La variable \$c es la mayor.";
}
?>