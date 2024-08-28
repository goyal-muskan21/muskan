<?php
date_default_timezone_set("Asia/Kolkata");
$currentTime= date("H");

if($currentTime<12){
echo "Good Morning LPU! Current Time Is:".date("g:i a");
}
else if($currentTime==12){
echo "Good Noon LPU! Current Time Is:".date("g:i a");
}
else if($currentTime>12 && $currentTime<=16){
echo "Good Afternoon LPU! Current Time Is:".date("g:i a");
}
else if($currentTime> 16 && $currentTime<21){
echo "Good Evening LPU! Current Time Is:".date("g:i a");
}
else{
echo "Good Night LPU! Current Time Is:".date("g:i a");
}
?>