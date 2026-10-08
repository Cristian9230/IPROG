<?php
header("Content-Type: text/plain; charset=utf-8");
$cpu = 37.5;
var_dump($cpu);          // tipo y valor
echo gettype($cpu) . "\n";   // solo el nombre del tipo
var_dump(is_float($cpu)); // ¿es de este tipo?
?>