<?php
echo("lajin keychain shoppe!!\r\n");

function add_keychains($a){
    echo("you have $a keychains.");
    $add=(int)readline("how many to add:\r\n ");
    $a+=$add;
    echo("now you have $a keychains.\r\n");
        return $a;
}
function remove_keychains($a){
    echo("you have $a keychains.");
    $rm=(int)readline("how many to remove:\r\n ");
    $a-=$rm;
    echo"now you have $a keychains\r\n";
    return $a;
}
function view_order($a,$p){
    echo("you have $a keychains\r\n");
    echo("keychain host $p each \r\n");
    $view=10*$a;
    echo"total cost is:  $view";
}
function checkout($a,$p){
    echo"check out\r\n";
    $name=readline("what is your name:\r\n ");
    echo("you have $a keychains\r\n");
    $cost=$a*$p;
    echo"total cost is :$cost \r\n";
    echo("thanks for your order, $name");
}

    $num=0;
    $cost=10;
echo("
1.Add keychains to order
2.Remove keychains from order
3.View current order
4.checckout
\r\n");
$choice=(int)readline("please enter a choice: ");
while($choice>=1 && $choice<=4){
if($choice==1){
$num=add_keychains($num);
}
elseif($choice==2){
$num=remove_keychains($num);
}
elseif($choice==3){
view_order($num,$cost);
}
else{
    checkout($num,$cost);
    break;
}echo("
1.Add keychains to order
2.Remove keychains from order
3.View current order
4.checckout
\r\n");
$choice=(int)readline("please enter a choice: ");
}


