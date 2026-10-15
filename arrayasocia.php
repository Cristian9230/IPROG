<?php
$config = ["puerto" => 80];
$puerto = $config["puerto"] ?? 80 + 1;     // 81
echo $puerto;
$puerto = ($config["puerto"] ?? 80) + 1; 
echo $puerto;
?>