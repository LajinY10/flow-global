<?php
echo "Here it comes !!\r\n ";
echo("Q1) What is the captial of India ?
1) Melbourne
2) Anchorage
3) Delhi\r\n");
$sum=0;
$ans=(int)readline("> ");
if($ans==1 or $ans==2){
    echo("sorry, Delhi is the captial of India\r\n");
}
else{
    echo("that's right !\r\n");
    $sum+=1;
}
echo("Q2) can you store the value 'cat' in a variable of type int?
1) yes
2) no\r\n");
$ans=(int)readline("> ");
if($ans==1){
    echo("sorry, 'cat'is a string\r\n");
}
else{
    echo("that's right !\r\n");
    $sum+=1;
}
echo("Q3) what is the result of 9+4/2 ?
1) 23
2) 11
3) 9\r\n");
$ans=(int)readline("> ");
if($ans==1 or $ans==3){
    echo("sorry, try again\r\n");
    }
else{
    echo("that's right !\r\n");
   
    $sum+=1;
}
echo("over all you got $sum out of 3 crt !\r\n");
echo("thanks for playing");


