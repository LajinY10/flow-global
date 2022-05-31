<?php
echo" I will add up the number you give me";
echo"\r\n";
$sum=0;
$number=(int)readline("number : ");
while($number!=0){
    $sum+=$number;
    echo" the total so far is $sum";
    echo"\r\n";
    $number=(int)readline("number : ");
}
echo(" The total is:  $sum");


    
    

   

