<?php
$gender=readline("what is your gender ( M or F) : ");
if (strtoupper($gender)=="M"){
   $fname=readline("Firstname: ");
   $lname=readline("Lastname: ");
   $age=(int)readline("Age:  ");
   if($age>=18){
       $m=readline("are you married,$fname ( y or n) ?");
       if(strtolower($m)=="y"){
           echo("Then i shall call you Mr. $lname");
       }
       else{
           echo(("hi $fname $lname"));
       }
   }
    else{
       echo(("hi $fname $lname")); 
    }
   }
else{
    $fname=readline("Firstname: ");
   $lname=readline("Lastname: ");
   $age=(int)readline("Age:  ");
   if($age>=18){
       $m=readline("are you married,$fname ( y or n) ?");
       if(strtolower($m)=="y"){
           echo("Then i shall call you Mrs. $lname");
       }
       else{
           echo(("hi $fname $lname"));
       }
   }
    else{
       echo(("hi $fname $lname")); 
    }
}




