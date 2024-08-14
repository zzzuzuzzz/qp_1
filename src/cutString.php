<?php

function cutString(string $line, int $length = 12, string $appends = '...'): string
{
    if (strlen($line) > $length) {
        $line = mb_strimwidth($line, 0, $length, $appends);
    }
    return $line;
}
