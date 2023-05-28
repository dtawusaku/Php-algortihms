<?php
/**
 * @param int|float ...$numbers
 * @return int|float
 */
function sum(int|float ...$numbers): int|float{
    return array_sum($numbers);
}
