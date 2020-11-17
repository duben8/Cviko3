<?php
$name_array = ["Jan", "Fero", "Radoslav"];
$chosen = $name_array[rand(0,count($name_array)-1)];
echo $chosen;