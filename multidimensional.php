<?php
/* 
    multidimensional array initialization
*/
$cars = array(
    array(
        "name"=>"Urus", 
        "type"=>"SUV", 
        "brand"=>"Lamborghini"
    ),
    array(
        "name"=>"Cayenne", 
        "type"=>"SUV", 
        "brand"=>"Porsche"
    ),
    array(
        "name"=>"Bentayga", 
        "type"=>"SUV", 
        "brand"=>"Bentley"
    ),
);
/* 
    Accessing multidimensional array
*/
echo "Accessing multidimensional array...";
echo "Urus is an ".$cars[0]["type"]." manufactured by ".$cars[0]["brand"]."\n";
echo "Bentayga is an ".$cars[2]["type"]." manufactured by ".$cars[2]["brand"]."\n";

print_r('**************************************************************************' . '<br>');

// array traversal
// find size of the array
$size = count($lamborghinis);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    foreach($cars[$i] as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
    echo "\n";
}


?>