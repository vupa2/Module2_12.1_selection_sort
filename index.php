<?php

$data = [1, 9, 4.5, 6.6, 5.7, -4.5];

function selectionSort($data)
{
    $dataLength = count($data);
    for ($i = 0; $i < $dataLength - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $dataLength; $j++) {
            if ($data[$j] < $data[$min]) $min = $j;
        }
        $temp = $data[$min];
        $data[$min] = $data[$i];
        $data[$i] = $temp;
    }
    return $data;
}

var_dump(selectionSort($data));
