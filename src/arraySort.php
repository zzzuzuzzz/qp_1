<?php

function arraySort(array $array, string $key = 'sort', int $sort = SORT_ASC): array
{
    usort($array, function ($a, $b) use ($sort, $key) {
        return $sort === SORT_DESC ? $b[$key] <=> $a[$key] : $a[$key] <=> $b[$key];
    });
    return $array;
}
