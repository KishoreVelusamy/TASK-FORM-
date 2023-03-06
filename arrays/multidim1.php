<?php

$cars=array(
    array(
        array("Polo",2020,15),
        array("Cruze",2012,14,
                    array("Swift",2022,20,
                            array("Octavia VRS",2021,12)
                    )
        )

    )
);

echo "The Favourite car for college students is ".$cars[0][0][0]."<br>";
echo "The Favourite car for college students is ".$cars[0][1][3][0]."<br>";
 echo "My Favourite sport model car is ".$cars[0][1][3][3][0];
?>