<?php
$num = 1509;
function countdigits($num){
    $count = 0;
    while ($num >0){
        $num = (int)($num /10);
        $count ++;
    }
    return $count;
}
echo countdigits($num);
echo"\n This code is executed by Parth Sharma,PRN-2220100264";
?>
