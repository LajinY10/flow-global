<?php
for ($i = 1; $i <56; $i++) {
    if($i==1 or $i==55){
        echo("+");
    }
    else{
        echo("-");
    }
}
echo("\r\n");
for ($j = 1; $j < 9; $j++) {
    for ($i = 1; $i <54; $i++){
        if($i==1  or$i==38 or $i==53){
        echo("|");
        }
        elseif($i==3){
            echo("$j |");
        }
        else{
            echo" ";
        }

}
 echo("\n");   
}

for ($i = 1; $i <56; $i++) {
    if($i==1 or $i==55){
        echo("+");
    }
    else{
        echo("-");
    }
}

