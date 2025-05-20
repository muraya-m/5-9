<?php
$towers = [
    'A' => [3, 2, 1],
    'B' => [],
    'C' => []
];
echo"▪️実行前\n";
printTowers($towers);

function printTowers($towers) {
    print_r($towers);
    echo "\n";
}

function hanoi($n, $from, $aux, $to, &$towers) {
    if ($n === 1) {
        $disk = array_pop($towers[$from]);
        $towers[$to][] = $disk;
        echo "{$from} から {$to} に移動\n";

    } else {
        hanoi($n - 1, $from, $to, $aux, $towers);

        $disk = array_pop($towers[$from]);
        $towers[$to][] = $disk;
        echo "{$from} から {$to} に移動\n";

        hanoi($n - 1, $aux, $from, $to, $towers);
    }
}

// 実行
hanoi(3, 'A', 'B', 'C', $towers);
echo"\n";
echo"▪️実行後\n";
printTowers($towers);
?>

