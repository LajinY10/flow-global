<?php
$h=(float)readline("your height in m: ");
$h=$h*$h;
$w=(float)readline("your weight in kg: ");
$bmi=$w/$h;
echo"your BMI is: $bmi \r\n";
if($bmi<18.5){
    echo"underweight";
}
elseif($bmi>=18.5 && $bmi<=24.9){
    echo"normal weight";
}
elseif($bmi>=25 && $bmi>29.9){
    echo"overweight";
}
else{
    echo"obese";
}


