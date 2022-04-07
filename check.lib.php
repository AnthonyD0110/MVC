<?php

function check_string($value, $min_len = 0, $max_len = 64)
{
    if (empty($value)) return 1;
    if (strlen($value) < $min_len) return 2;
    if (strlen($value) > $max_len) return 3;
    return 0;
}

function check_array($table, $valeur = "")
{
    $res = false;
    foreach ($table as $row) {
        foreach ($row as $value) {
            if ($value == $valeur) {
                $res = true;
            }
        }
    }
    return $res;
}
