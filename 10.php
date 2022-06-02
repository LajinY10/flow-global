<?php
$n=readline("enter your name: ");
$a=readline("hi $n !.enter your age: ");
if($a<=16){
    echo(" you can't drive");
}elseif ($a<=16 && $a<=17) {
   echo(" you can drive but not vote  ");
}elseif($a<=18 && $a<25){
    echo(" you can vote but you can't rent a car ");
}else{
    echo("you can do anything !");
}

