<?php

function valid_input(array $nums)
{

    if (count($nums) < 2) {
        return false;
    }

    foreach ($nums as $num) {
        if (!is_numeric($num)) {
            return false;
        }
    }

    return true;
}