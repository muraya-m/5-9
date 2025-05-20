<?php

$numbers = [2,9,7,5,8,1,3,4,6];
sort($numbers);
$target = 7;

function binarySearch(array $arr, int $target): int {
    $left = 0;
    $right = count($arr) - 1;
    
    while($left <= $right) {
        $mid = intdiv($left + $right,2);
        
        if ($arr[$mid]===$target) {
            return $mid;
        } elseif($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return-1;
}

$result = binarySearch($numbers,$target);

if($result !== -1) {
    echo "要素{$target}は元の配列のインデックス{$result}に見つかりました。\n";
}

?>