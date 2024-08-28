<?php
function calculate($marks, $totalMarks = 500) {
     return (($marks/$totalMarks)*100)."%";
}
$marks = array("Bansh" => 400, "Archie" => 300, "Varnika" => 250, "Niyam" => 265);
print_r(array_map("calculate",$marks));

// date_dafault_timezone_set("Asia/Kolkata");

// echo $currentTime(date("d/m/Y h:i:sa"));
?>