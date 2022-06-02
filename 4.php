<?Php
echo("please eneter the folowing information so i can sell it for a profit\r\n");
$fname=readline("First name: ");
$lname=readline("Last name: ");
$grade=(int)readline("grade (9-12) : ");
$sid=(int)readline("Student ID: ");
$lg=readline("login: ");
$g=(float)readline("GPA (0.0-4.0 : ");
echo("your inforamtion:
login:$lg\r\nID: $sid\r\n name:$lname$fname\r\nGrade: $g\r\nGrade: $grade");
