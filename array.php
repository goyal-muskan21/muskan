<?php
function prices($amount) {
     return ($amount + (18/100)*$amount);
}
$amount = array("Yashendra" => 2000,
                "Archie" => 5500,
                "Bansh" => 3300,
                "Rajnish" => 4500,
                "Shreesty" => 4200,
                "Muskan" => 4750);

print_r(array_map("prices",$amount));
?>