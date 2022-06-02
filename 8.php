<?php
$a=readline("enter your age: ");
if($a<=16){
    echo(" you can't drive and you can't vote and you can't rent a car ");
}elseif ($a<=18) {
   echo(" you can't vote and you can't rent a car  ");
}elseif($a<=25){
    
    echo(" you can't rent a car ");
}else{
    echo("you can do anything !");
}

