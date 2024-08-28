<?php
$a = array("Yash" => 5000,
       "Archie" => 6000,
       "Bansh" => 5500,
       "Shreesty" => 4500);

// krsort($a);
// $keys = array_keys($a);
// echo "Max is $keys";

$max_key = array_keys($a, max($a))[0];
echo "Maximum amount is $max_key 's amount ";

?>