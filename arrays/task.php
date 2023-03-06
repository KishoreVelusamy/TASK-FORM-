<?php


$products=array(
    array(
        "name"=> "Soap",
        'price' =>55
    ),
    array(
        "name"=> "Brush",
        'price' =>20
    ),
    array(
        "name"=> "Shampoo",
        'price' =>98
    ),
    array(
        "name"=> "Oil",
        'price' =>345
    ),
    array(
        "name"=> "Washing Powder",
        'price' =>234
    ),
);
$sum = array_sum(array_column($products, 'price'));
echo "The total price of all product is: ".$sum." rs";
?>