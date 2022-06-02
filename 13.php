<?php
echo"TWO QUESTIONS!
Think of an object and I'll try to guess it.
1.animal 2.vegetable 3.mineral\r\n";
$q=(int)readline("enter your choice?  >");
$qn=readline("IS it bigger than a breadbox ? \r\n");
if($q==1){
if( strtolower($qn)=="yes"){
    echo"my guess is that you are thinking of a mouse.
I would ask you if I'm right, but I don't actually care.";
}
else{
     echo"my guess is that you are thinking of a squirrel.
I would ask you if I'm right, but I don't actually care.";
}}
elseif ($q==2) {
    
if ( strtolower($qn)=="yes") {
    echo"my guess is that you are thinking of a watermelon.
I would ask you if I'm right, but I don't actually care.";
}
else{
    echo"my guess is that you are thinking of a carrot.
I would ask you if I'm right, but I don't actually care.";
}}
elseif($q==3){
if( strtolower($qn)=="yes"){
    echo"my guess is that your are thinking of a camero.
I would ask you if I'm right, but I don't actually care.";
}
else{
echo"my guess is that your are thinking of a paperclip.
I would ask you if I'm right, but I don't actually care.";
}}
else{
    echo"select correect choice";
}
