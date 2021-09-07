<?php
$start = microtime(true);
for ($i = 0; $i < 1000000; $i++){
    if ($i % 2 == 0)
        echo $i.'<br>';
}

$endTime = microtime(true);
echo $endTime - $start;