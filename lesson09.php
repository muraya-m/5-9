<?php
$a = 1116;
$b = 708;

$gcd = gcdWithLogging($a, $b);

function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}

function gcdWithLogging($a, $b) {
    $results = [];
    $lastA = $a;
    $lastB = $b;

    while ($b != 0) {
        $remainder = $a % $b;
        //更新前のaとbを保存
        $lastA = $a;
        $lastB = $b;

        //aとbを更新
        $a = $b;
        $b = $remainder;
        
        //余りを記録
        $results[] = $remainder;
    }

    //計算過程の出力
    foreach ($results as $result) {
        if ($result != 0) {
            echo $result . "\n";
        }
    }

    echo "{$lastA}と{$lastB}の最大公約数は{$a}\n";
    return $a;
}
?>
