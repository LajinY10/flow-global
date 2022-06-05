<?php
$subject = ["English III", "Precalculus", "Music Theory", "Bio Technology", "Principles of Technology I", "Latin II", "AP US History", "Business Computer Information Systems"];
$staffs = ["Ms.Lapan", "Mr.Gideon", "Mrs.Davis", "Ms.Palmer", "Ms.Garcia", "Mrs.Barnett", "Ms.Johanessen", "Mr.James"];
for ($i = 1; $i <60; $i++) {
    if($i==1 or $i==59){
        echo("+");
    }
    else{
        echo("-");
    }
}
echo "\n";
for($i=1;$i<9;$i++){
    echo "| $i |";
    $d=str_repeat(" ",37-strlen($subject[$i-1]));
    $f=str_repeat(" ",13-strlen($staffs[$i-1]));
    $sub=$subject[$i-1];
    $staff=$staffs[$i-1];
    echo("$d $sub|$f $staff|");
    echo "\n";
}
for ($i = 1; $i <60; $i++) {
    if($i==1 or $i==59){
        echo("+");
    }
    else{
        echo("-");
    }
}

