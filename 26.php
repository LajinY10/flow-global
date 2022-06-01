<?php
echo("lajin keychain shoppe!!\r\n");

function add_keychains(){
      echo("Add keychains\r\n");
}
function remove_keychains(){
      echo("remove ordder\r\n");
}
function view_order(){
    echo("view order\r\n");
}
function checkout(){
     echo"check out\r\n";
    
}
while(true){
echo("
1.Add keychains to order
2.Remove keychains from order
3.View current order
4.checckout
\r\n");
$choice=(int)readline("please enter a choice: ");
if($choice==1){
add_keychains();
}
elseif($choice==2){
remove_keychains();
}
elseif($choice==3){
view_order();
}
else{
    checkout();
    break;
}
}

