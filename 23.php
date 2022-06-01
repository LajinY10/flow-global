<?php
for ($i = 1; $i < 101; $i++) {
    if ($i%3==0 && $i%5==0) {
        print("fizzBuzz\r\n");
        }
    elseif($i%3==0){
        print("fizz\r\n");
    }
    elseif ($i%5==0) {
        print("Buzz\r\n");
        }
    
    else{ 
        echo"$i\r\n";
        
    }
}

