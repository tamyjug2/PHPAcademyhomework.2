<?php

$name = 'tamara';
$arr = str_split($name);
$abcs = range('a', 'z');
$index = 0;
$len = strlen($name);

foreach ($arr as $cur_letter) {
    $rev_letter = $arr [$len - 1 - $index];
    $index++;
    foreach ($abcs as $char) {
        if ($char == $cur_letter) {
            echo '<b>' . $char . '</b>';
        } else if ($char == $rev_letter) {
            echo '<u>' . $char . '</u>';
        } else {
            echo $char;
        }
    }
    echo "</br>";
}


