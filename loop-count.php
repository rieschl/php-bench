<?php
function time_count()
{
    $start = microtime(true);
    for ($i = 0; $i < 10000000; $i++) {
#       $var = md5(uniqid());
        $var = 'abc';
    }
    $end = microtime(true);

    $total = $end - $start;
    return $total;
}

$time = 0;
$loops = 10;
for ($j = 0; $j < $loops; $j++) {
    $cur = time_count();
    $time += $cur;
    echo $cur . '<br>';
}

$avg = $time / $loops;
echo "<br><br>total: $time <br>avg: $avg";

