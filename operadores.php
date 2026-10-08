<?php
//anotacion prefija y postfija la diferencia es que la prefija primero incrementa y luego muestra el valor, mientras que la postfija primero muestra el valor y luego incrementa
    $j=0; //declaracion de variable j
    echo $j++; //incremento de 1 a la variable j
    echo "<br>";
    echo $j; 
    echo "<br>";
    $j=0; //declaracion de variable j

// ahora mas a : sumarle 5 a la variable j
    $j+=5; //incremento de 5 a la variable j
    echo $j; 
    echo "<br>";
    $j %= 4; //incremento de 4 a la variable j
    echo $j; 
    echo "<br>";

// ahora mas a : sumarle 5 a la variable j
    $i=2; //declaracion de variable i
    echo $j === $i; //comparacion de las variables j e i si son iguales o no
    echo "<br>";

// ahora mas a : sumarle 5 a la variable j
    $result = $i>1 && $j<2; //comparacion de las variables j e i si son mayores o menores
    echo $result;
    $result = $i>1 || $j<2; //comparacion de las variables j e i si son mayores o menores
    echo "<br>";
    echo $result; //muestra el resultado de la comparacion

// ahora mas a : sumarle 5 a la variable g
$g=0;
$g+=5; //incremento de 5 a la variable g
    echo "<br>";
    echo $g; 
    echo "<br>";
$g-=2; //decremento de 2 a la variable g
    echo $g; 
    echo "<br>";

// aqui vamos a mostrar el incremento de 1 a la variable g
echo ++$g."<br>"; //incremento de 1 a la variable g

// ahora vamos a concatenar un mensaje con una variable
$msgs = 5;
echo "Tenemos para ". $msgs." mensajes nuevos"; //muestra el mensaje con la variable msgs

$msgs="nuevos";
echo "<br>";

// ahora vamos a concatenar un mensaje con una variable y correguirla sintaxis erronea
echo "<br>";
$text = 'My spelling\'s atroshus'; // $text = 'My spelling's atroshus'; // Erroneous syntax
echo $text;
echo "<br>";

// ahora vamos acrear variable author y concatenar un mensaje con una variable y correguirla sintaxis erronea
$author = "Bill Gates";
$text = "Measuring programming progress by lines of code is like
Measuring aircraft building progress by weight.
- $author.";
echo $text;

?>