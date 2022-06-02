<?php
echo("0.saturday 1.sunday 2.monday 3.tuesday 4.wednesday 5.thursday 6.friday \r\n");
$weekday=array("saturday" ,"sunday","monday","tuesday","wednesday","thursday","friday","saturday");
$choice=(int)readline("enter your day:  ");
$s=$weekday[$choice];
echo" TOday is $s";

