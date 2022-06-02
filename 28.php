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
function view_order($a,$p,$tax,$s_order,$s_cost){
    echo("you have $a keychains\r\n");
    echo("keychain host $p each \r\n");
    echo("you have $tax tax for this order\n");
    echo("order shipping charge is $s_order\n");
    echo(" per keychain shipping cost $s_cost\n ");
    $view=10*$a;
    $s_cost=$a*$s_cost;
    $total=$view+$tax+$s_order+$s_cost;
    echo"total cost is:  $total\n";
    
}
function checkout($a,$total,$tax,$s_order,$s_cost){
    echo"check out\r\n";
    $name=readline("what is your name:\r\n ");
    echo("you have $a keychains\r\n");
    $view=10*$a;
    $s_cost=$a*$s_cost;
    $total=$view+$tax+$s_order+$s_cost;
    echo"total cost is:  $total\n";
    echo("thanks for your order, $name");
}

$num=0;
$cost=10;
$tax=8.25;
$s_order=5.0;
$s_cost=1.00;
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
view_order($num,$cost,$tax,$s_order,$s_cost);
}
else{
    checkout($num,$cost,$tax,$s_order,$s_cost);
    break;
}echo("
1.Add keychains to order
2.Remove keychains from order
3.View current order
4.checckout
\r\n");
$choice=(int)readline("please enter a choice: ");
}


