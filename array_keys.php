<?php
/* 
    multidimensional array initialization
*/
$cars = array(
    "Urus" => array(
            "type"=>"SUV", 
            "brand"=>"Lamborghini"
        ),
    "Cayenne" => array(
            "type"=>"SUV", 
            "brand"=>"Porsche"
        ),
    "Bentayga" => array(
            "type"=>"SUV", 
            "brand"=>"Bentley"
        ),
);

/* 
    array traversal
*/
// find size of the array
$size = count($lamborghinis);

// array keys
$keys = arra_keys($cars);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    echo $keys[$i]. "\n";
    foreach($cars[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
    echo "\n";
}

?>