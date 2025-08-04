<?php

$digits = [45, -65, -87, 89, 98, -67885];

foreach($digits as $digit){
    if($digit % 2 == 0){
        if($digit > 0){
            echo "<h3> $digit = This number is even and positive</h3><br> ";
        }else{
            echo "<h3> $digit = This number is even and negative</h3><br> ";
        }
    }

    else{
        if($digit > 0){
            echo "<h3>$digit = This number is odd and positive</h3><br>";
        }
        else{
            echo "<h3>$digit = This number is odd and negative</h3><br>";
        }
    }
}

?>
