<?php
$weight=(int)readline("enter your current earth weight: ");
echo " I have information for following planets:";
echo "\r\n";
echo " 1.venus    2.Mars      3.Jupiter
  4.Saturn   5.uranus    6.neptune";
  echo ("\r\n");
$value=(int)readline("which planet you are visiting: ");
 switch ($weight) {
     case $value==1:
         $sum = $weight*2.2407;
         echo " yo weight shoud be $sum on this planet";
         break;
     case $value==2:
         $sum = $weight*0.39;
          echo " yo weight shoud be $sum on this planet";
         break;
     case $value==3:
         $sum = $weight*2.4;
          echo " yo weight shoud be $sum on this planet";
         break;
     case $value==4:
         $sum = $weight*1.08;
          echo " yo weight shoud be $sum on this planet";
         break;
     case $value==5:
         $sum = $weight*17.24;
          echo " yo weight shoud be $sum on this planet";
         break;
     case $value==6:
         $sum = $weight*1.14;
          echo " your weight shoud be $sum on this planet";
         break;
     
     default:
         echo("select a correct planet");
         break;
 }


