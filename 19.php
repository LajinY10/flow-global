<?php
$num=rand(1,100);
echo("i'm thinking of a number between 1-100, You have 7 guesses.\r\n");
$i=1;
$guess=(int)readline("first guess : ");
while($i<7 && $num !=$guess) {
    if($guess>$num){
        echo"sorry You are too high, try again !\r\n";
    }
    elseif ($guess<$num) {
        echo("sorry You are too low, try again !\r\n");
    }
    $i++;
    $guess=(int)readline(" guess $i # ");
}
if($num==$guess){
    echo(" you guesseed it !!");
}
else{
    print("you did'nt guessed it in 7 tries,try again !");
}
