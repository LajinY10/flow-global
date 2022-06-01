<?php
#triangle
function triangle( $h, $b){
    $a=($h * $b)/2;
     echo"$a \r\n";
}
triangle(5,6);
#square
function square( $s){
    $a=$s*$s;
     echo"$a \r\n";
}
square(5);
#rectangle
function rectangle( $l, $b){
    $a=($l * $b);
     echo"$a \r\n";
}
rectangle(3,4);
#circle
function circle($r){
    $a=3.14*$r*$r;
     echo"$a \r\n";
}
circle(5);

