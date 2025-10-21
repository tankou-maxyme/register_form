<?php

$values = [1,2 ,true, false, null , 0,'john'];
$even = [2, 4, 6, 8];
$odd = array(1,3,5,7,9);


$POST = [
    "id"=> 1,
    "Title"=> "Welcome to php",
    "description"=>"php is a server scripting language"
];

//                0     1     2     3
$coordinates = [[1,2],[3,4],[5,6],[7,8]];

$students = [
    [
        "Fisrt name :" => "Banabas",
         "Last name :" => "Romeo",
          "Age :" => "24",
    ],
    [
         "Fisrt name :" => "leo",
          "Last name :" => "Damien",
           "Age :" => "22",
    ],

];

echo $coordinates[3][0];//7
echo $coordinates[1][1];//4

echo "<pre>";
print_r($even);
print_r($odd);
print_r($students);
print_r($POST);
echo"</pre>";

foreach ($students as $student){
    echo $student["First name :"] . $student["Age :"] . "br/>";
}