<?php
echo"TWO MORE QUESTIONS !!
think of something and I'll try to guess it \r\n";
$q=readline("does it stay inside or outside or both? ");
if(strtolower($q)=="inside"){
    $qn=readline("is it a living thing? ");
    if(strtolower($qn=="yes")){
        echo"it is a houseplant!! ";
    }
    else{
        echo"it is a shower curtain ";
    }}
elseif(strtolower($q)=="outside"){
    $qn=readline("is it a living thing? ");
    if(strtolower($qn=="yes")){
        echo"it is a bison!! ";
    }
    else{
        echo"it is a billboard ";
    }
}
elseif(strtolower($q)=="both"){
    $qn=readline("is it a living thing? ");
    if(strtolower($qn=="yes")){
        echo"it is a dog!! ";
    }
    else{
        echo"it is a cellphone ";
    }
}
else{
    echo"choose the correct one";
}


